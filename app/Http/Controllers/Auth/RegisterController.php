<?php

namespace App\Http\Controllers\Auth;

use App\Repository\User\IUserRepository;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to look for operations on models
     *
     * @var UserRepository
     */
    protected $repository;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @param IUserRepository $userRepository
     * @return void
     */
    public function __construct(IUserRepository $userRepository)
    {
        $this->middleware('guest');
        $this->repository = $userRepository;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:191',
            'middle_name' => 'max:191',
            'last_name' => 'max:191',
            'email' => 'required|email|max:191|unique:users',
            'username' => 'required|max:191|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        //event(new Registered($user = $this->create($request->all())));
        try {
            $user = $this->repository->createOrUpdate($request->all());

            $this->guard()->login($user);

        } catch (\Exception $exception) {
            Log::error('Error:'. $exception->getMessage());
            return redirect()->back()->withException($exception);
        }

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
}
