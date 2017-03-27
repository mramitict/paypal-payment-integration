<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\PaymentExecution;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\BaseAddress;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

class PaymentController extends Controller
{
    private $_apiContext;

    public function __construct()
    {
        // setup PayPal api context
        $paypal_conf = config('paypal');
        $this->_apiContext = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_apiContext->setConfig($paypal_conf['settings']);
    }

    public function index()
    {
        return view('payment.index');
    }

    public function create(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        /*$item = new Item();
        $item->setName('Silver Package')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setSku('TRANS10001')
            ->setPrice($request->get('amount'));*/

        /*$itemList = new ItemList();
        $itemList->setItems([$item]);*/

        /*$details = new Details();
        $details->setShipping(1.2)
            ->setTax(1.3)
            ->setSubtotal(17.50);*/

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($request->get('amount'));
            //->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            //->setItemList($itemList)
            ->setDescription("Payment towards App4Inspection Package")
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('payment.success'))
            ->setCancelUrl(route('payment.fail'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions([$transaction]);

        try {
            $payment->create($this->_apiContext);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Some error occur, sorry for inconvenient');
            }
        }
        return redirect($payment->getApprovalLink());
    }

    public function success()
    {
        $request = request();
        $payment_id = $request->get('paymentId');
        $token = $request->get('token');
        $payer_id = $request->get('PayerID');

        //$payment = PayPal::getById($id, $this->_apiContext);

        $payment = Payment::get($payment_id, $this->_apiContext);

        $execution = new PaymentExecution();

        $execution->setPayerId($payer_id);
        $result = $payment->execute($execution, $this->_apiContext);

        if ($result->getState() == 'approved') { // payment made
            return view('payment.success', compact('result'));
        }

        return redirect(route('payment.fail'));
        // Clear the shopping cart, write to database, send notifications, etc.

        // Thank the user for the purchase

    }

    public function fail()
    {
        if(request()->has('token')){

        }
    }
}
