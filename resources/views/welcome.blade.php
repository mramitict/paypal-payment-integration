<!DOCTYPE HTML>
<html>
<head>

    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title> Inspection App - Inspection Management Software | iPad, Android Tablet</title>
    <meta name="description" content="Inspect offline and manage online with Inspection software. Improve quality, efficiency and reporting in your organization">
    <meta name="keywords" content="hotel,inspection,online, health, custom">
    <meta name="author" content="Techwagon Solutions">

    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'>		<!----//webfonts---->
    <!----start-top-nav-script---->

    <!-- Custom Theme files -->
    <link href="{{ asset('/css/theme-style.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{ asset('/css/custom.css') }}" rel='stylesheet' type='text/css' />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>


    <script>
        $(function() {
            var pull 		= $('#pull');
            menu 		= $('nav ul');
            menuHeight	= menu.height();
            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
</head>
<body>
<!----start-container---->
<!----start-header---->
<div id="home" class="header">
    <div class="container">
        <!----start-logo---->
        <div class="logo"><font size="6" color="#017E84"><strong>App4Inspection</strong></font>
            <!-- <a href="#"><img src="images/logo.png" title="App4Inspection" /></a> -->
        </div>
        <!--top-nav-->
        <nav class="top-nav">
            <ul class="top-nav">
                <li class="active"><a href="#home">Home</a> <span> </span></li>
                <li class="page-scroll"><a href="#about">About</a><span> </span></li>
                <li class="page-scroll"><a href="#services">Services</a><span> </span></li>
                <li class="page-scroll"><a href="#pricing">Pricing</a><span> </span></li>
                <li class="page-scroll"><a href="#contact">Contact</a></li>
                <li class="page-scroll"><a href="{{url('/login')}}">Login</a><span> </span></li>
                <li class="page-scroll"><a href="{{url('/register')}}">Register</a><span> </span></li>
            </ul>
            <a href="#" id="pull"><img src="{{asset('/img/nav-icon.png')}}" title="menu" /></a>
        </nav>
        <!--//top-nav-->
        <!----//End-logo---->
    </div>
</div>
<!----//End-header---->
<!----start-slider---->
<div class="slider">
    <!-- Slideshow 3 -->
    <script src="{{asset('/js/responsiveslides.min.js')}}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 3
            $("#slider3").responsiveSlides({
                manualControls: '#slider3-pager',
            });
        });
    </script>
    <ul class="rslides" id="slider3">
        <li>
            <div class="col-md-6 divice">
                <img src="{{asset('img/divice3.png')}}" title="divice" />
            </div>
            <div class="col-md-6 divice-info">
                <div class="divice-info-head">
                    <div class="col-md-2 world-ico">
                        <img src="{{asset('img/world-ico.png')}}" title="world-ico" />
                    </div>
                    <div class="col-md-8">
                        <h1>APP OF THE YEAR</h1>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="divice-info-text">
                    <h2> MY APPS showcase</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eros dolor, tempus sed enim in, fermentum pretium elit. Sed aliquet enim id orci ultricies, in dapibus urna iaculis.</p>
                    <a class="btn" href="#"> Buy Now</a>
                </div>
            </div>
        </li>
        <li>
            <div class="col-md-6 divice">
                <img src="{{asset('img/divice1.png')}}" title="divice" />
            </div>
            <div class="col-md-6 divice-info">
                <div class="divice-info-head">
                    <div class="col-md-2 world-ico">
                        <img src="{{asset('img/world-ico.png')}}" title="world-ico" />
                    </div>
                    <div class="col-md-8">
                        <h1>APP OF THE YEAR</h1>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="divice-info-text">
                    <h2> MY APPS showcase</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eros dolor, tempus sed enim in, fermentum pretium elit. Sed aliquet enim id orci ultricies, in dapibus urna iaculis.</p>
                    <a class="btn" href="#"> Buy Now</a>
                </div>
            </div>
        </li>
        <li>
            <div class="col-md-6 divice">
                <img src="{{asset('img/divice4.png')}}" title="divice" />
            </div>
            <div class="col-md-6 divice-info">
                <div class="divice-info-head">
                    <div class="col-md-2 world-ico">
                        <img src="img/world-ico.png" title="world-ico" />
                    </div>
                    <div class="col-md-8">
                        <h1>APP OF THE YEAR</h1>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="divice-info-text">
                    <h2> MY APPS showcase</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eros dolor, tempus sed enim in, fermentum pretium elit. Sed aliquet enim id orci ultricies, in dapibus urna iaculis.</p>
                    <a class="btn" href="#"> Buy Now</a>
                </div>
            </div>
        </li>
    </ul>
    <!-- Slideshow 3 Pager -->
    <ul id="slider3-pager">
        <li><a href="#"><img src="{{asset('img/thumb1.jpg')}}" alt=""></a></li>
        <li><a href="#"><img src="{{asset('img/thumb2.jpg')}}" alt=""></a></li>
        <li><a href="#"><img src="{{asset('img/thumb3.jpg')}}" alt=""></a></li>
    </ul>
    <div class="clearfix"> </div>
</div>
<!----//End-slider---->
<!---- start-about---->
<div id="about" class="about text-center">
    <div class="container">
        <h3>About App4Inspection</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <img src="{{asset('img/about-pic.png')}}" alt="">
    </div>
</div>
<!----//End-about---->
<!----start-services---->
<div id="services" class="services">
    <h4>App4Inspection Services</h4>
    <!--Horizontal Tab-->
    <div id="horizontalTab">
        <ul class="resp-tabs-list">
            <li class="tab1"><span> </span></li>
            <li class="tab2"><span> </span></li>
            <li class="tab3"><span> </span></li>
            <li class="tab4"><span> </span></li>
            <li class="tab5"><span> </span></li>
            <li class="tab6"><span> </span></li>
        </ul>
        <div class="resp-tabs-container">
            @foreach($packages as $package)
                <div class="tab">
                    <div class="container">
                        <div class="tab-info">
                            <div class="col-md-6 tab-divice">
                                <img src="{{asset('img/divice2.png')}}" title="divice" />
                            </div>
                            <div class="col-md-6 tab-divice-info">
                                <h3>{{$package->name}}</h3>
                                <p>{{$package->details}}</p>
                                <a class="btn" href="#"> Buy Now</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{asset('/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true,   // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);

                    $name.text($tab.text());

                    $info.show();
                }
            });

            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
</div>
<!----//End-services---->
<!----start-pricing-table----->
<div id="pricing" class="services">
    <h4>App4Inspection Pricing</h4>
    <div class="container content">
        <div class="row">
            @foreach($packages as $package)
                    <!-- Pricing -->
            <div class="col-md-3">
                <div class="pricing hover-effect">
                    <div class="pricing-head">
                        <h3>{{$package->name}} <span>
                                {{$package->tagline}}
                         </span>
                        </h3>
                        <?php $price = explode('.', $package->price('monthly')?:'0.00') ?>
                        <h4><i>$</i>{{isset($price[0])?$price[0]:'0'}}<i>.{{isset($price[1])?$price[1]:00}}</i>
                        <span>
                        Per Month </span>
                        </h4>
                    </div>
                    <ul class="pricing-content list-unstyled text-center">
                        <li>
                            {{$package->max_form}} Form
                        </li>
                        <li>
                            {{$package->max_space}} GB Space
                        </li>
                        <li>
                            {{$package->max_checklist}} Checklists
                        </li>
                        <li>
                            {{$package->max_user}} User Creation
                        </li>
                        <li>
                            {{$package->max_image}} Image Upload
                        </li>

                    </ul>
                    <div class="pricing-footer">
                        <p>
                            {{$package->details}}
                        </p>
                        <a href="{{url('/register',$package->idEncrypt())}}" class="btn yellow-crusta">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-3">
                <div class="pricing hover-effect">
                    <div class="pricing-head">
                        <h3>Master <span> Customize your need
					 </span>
                        </h3>
                        <h4><i>$</i>78<i>.49</i>
                        <span>
					Per Month </span>
                        </h4>
                    </div>
                    <ul class="pricing-content list-unstyled text-center">
                        <li>
                            Unlimited Form
                        </li>
                        <li>
                            Unlimited GB Space
                        </li>
                        <li>
                            Unlimited Checklists
                        </li>
                        <li>
                            Unlimited User Creation
                        </li>
                        <li>
                            Unlimited Image Upload
                        </li>

                    </ul>
                    <div class="pricing-footer">
                        <p>
                            Make your custom package yourself
                        </p>
                        <a href="#contact" class="btn yellow-crusta">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <!--//End Pricing -->
        </div>
    </div>
    <!----//End-pricing-table----->
</div>

<!----start-contact---->
<div class="contact" id="contact">
    <h2>Contact App4Inspection</h2>
    <div class="contact-form">
        <div class="contact-info">
            <h3><span>Contact Us</span> Now</h3>
            <p>Lorem ipsum address line1, address lin</p>
            <label>0414 459 237</label>
            <a href="mailto:info@app4inspection.com">info@app4inspection.com</a>
            <i> </i>
            <form action="{{url('enquiry')}}" method="post">
                {{csrf_field()}}
                <input type="text" placeholder="Name" name="enquirer_name" value="{{old('enquirer_name')}}">
                <input type="text" placeholder="Email" name="enquirer_email" value="{{old('enquirer_email')}}">
                <textarea placeholder="message" name="message">{{old('message')}}</textarea>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </div>
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed/v1/place?q=Techwagon+Solutions+Pvt+Ltd.,+GP+Block,+Kolkata,+West+Bengal,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
    </div>
</div>
<!----//End-contact---->
<!----start-footer---->
<div class="footer">
    <p>Created &amp; Mantained By  <a href="http://techwagons.com/">Techwagon Solution Pvt. Ltd.</a></p>
    <a href="#home" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!----//End-footer---->
<!----//End-container---->
<!---- start-smoth-scrolling---->
<script type="text/javascript">
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
<!---- start-smoth-scrolling---->

</body>
</html>