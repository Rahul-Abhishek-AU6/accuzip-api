<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Robots Please remove during Live-->
    <meta name="robots" content="follow, index">
    <!--Favicon-->
    
    @stack('meta')
    {{-- <link rel="icon" href="web/img/fav.png"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">   

    <link rel="apple-touch-icon" sizes="57x57" href="/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    
    
    <meta name="google-site-verification" content="hvR02Cty-QtB6wBX7qPMxbviKPsuNltLM06WHmb7ydk" />
    <link rel="apple-touch-icon-precomposed" href="img/logo.png">
    <!--Fonts/Icons CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
    <!--Main and Responsive CSS-->
    <link rel="stylesheet" href="{{ asset('web/css/main.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}"> --}}
   

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165611989-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-165611989-1');
    </script>
    <meta name="google-site-verification" content="hvR02Cty-QtB6wBX7qPMxbviKPsuNltLM06WHmb7ydk" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @stack('style')
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
        queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]> <script
        src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script
        src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
</head>

<body>

<section class="top-main">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-12">
                <p><span class="call">CALL US TODAY!</span> <span class="number">516.292.1506</span> FREE SHIPPING on orders of <span class="hundred">$100</span> or more</p>
            </div>

            <div class="col-md-5 col-sm-5 col-12">
                <p class="wel"><span class="welcome">Welcome to</span> Rush Print NYC!</p>
            </div>
        </div>
    </div>
    
</section>


<section class="logo-sec">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4 col-12">
                <a href="{{ url('') }}"><img src="{{ url('') }}/web/images/logo.png" class="" alt="logo  "></a>
            </div>

            <div class="col-md-8 col-sm-8 col-12 new-srch">
            {!! Form::open(['route'=>'web.search.main','class'=>'form-inline my-2 my-lg-0 new-srch','method'=>'get']) !!}
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="q" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="iui"><i class="fa fa-user-o" aria-hidden="true"></i></span> 
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            @guest
                            <li><a href="{{ route('login') }}">Log In</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('home') }}">Account</a></li>
                            @endguest
                        </ul>
                    </li>
                </ul>


                <a class="btn btn-success btn-sm ml-3 new-cart" href="{{ route('web.cart.index') }}">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">{{ Cart::getTotalQuantity() }}</span>
                </a>
            {!! Form::close() !!}
            </div>


        </div>
    </div>

</section>


<section>
    <header class="navigation" id="sticky-nav">
        <div class="container">
            
            <nav id='cssmenu' class="navigation">
                <div id="head-mobile"></div>
                <div class="button"></div>

                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>

                    
                    <li class=""><a href="{{ route('how.we.work') }}">Send Mail</a></li>
                    <li class="has-sub">
                        <span class="submenu-button"></span>
                        <a href="#">Mailing Services</a>
                        <ul class="sub-menu">
                            
                            {{-- <li><a href="{{ route('web.list.locater') }}">List Locater</a></li> --}}
                                   
                            <li><a href="{{ route('web.ravi.overview') }}">Overview</a></li>                    
                            <li><a href="{{ route('web.ravi.targer') }}">Targeted Direct Mail</a></li>                    
                            <li><a href="{{ route('web.ravi.eddm') }}">EDDM</a></li>
                            <li><a href="{{ route('web.ravi.prices.and.sizes') }}">Pricing and Sizes</a></li>
                            <li><a href="{{ route('web.ravi.design.chose') }}">Design Choices</a></li> 
                            {{-- <li><a href="{{ route('web.blog') }}">Blog</a></li>                     --}}
                        </ul>
                    </li>
                    {{-- <li class="has-sub">
                        <span class="submenu-button"></span>
                        <a href="{{ route('web.direct.mail') }}">Direct Mail</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('web.special.offers') }}">Special Offers</a></li>
                            <li><a href="{{ route('web.gallery') }}">Design Gallery</a></li>
                            <li><a href="{{ route('web.upload.design','postcards6by9') }}">6 in x 9in Post Card</a></li>
                            <li><a href="{{ route('web.upload.design','postcards6by11') }}">6 in x 11in jumbo Post Card</a></li>
                        </ul>
                    </li> --}}

                    

                    <li class="has-sub">
                        <span class="submenu-button"></span>
                        <a href="{{ route('web.marketing.meterial') }}">Marketing Materials</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('web.upload.design','postcards') }}">Postcards</a></li>
                            <li><a href="{{ route('web.upload.design','rackcards') }}">Rack Cards</a></li>
                            <li><a href="{{ route('web.upload.design','flyers') }}">Flyers</a></li>
                            <li><a href="{{ route('web.upload.design','brochures') }}">Brochures</a></li>
                            <li><a href="{{ route('web.upload.design','door-hangers') }}">Door Hangers</a></li>
                            <li><a href="{{ route('web.upload.design','posters') }}">Posters</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <span class="submenu-button"></span>
                        <a href="{{ route('web.office.stationary') }}">Office Stationery</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('web.upload.design','business-cards') }}">Business Card</a></li>
                            <li><a href="{{ route('web.upload.design','letterhead') }}">Letterhead</a></li>
                            <li><a href="{{ route('web.upload.design','envelopes') }}">Envelopes</a></li>
                            <li><a href="{{ route('web.upload.design','note-pads') }}">Note Pads</a></li>
                        </ul>
                    </li>
                    
                    {{-- <li><a href="{{ route('web.contact') }}">More</a></li> --}}
                </ul>

                <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
                    <li class="nav-item cr"><a class="nav-link" href="#exampleModal" data-toggle="modal" data-target="#exampleModal" style="color: #2a3472 !important; font-weight: 600;">Custom Request</a></li>
                    
                </ul>
            </nav>           
            
        </div>
    </header>
</section>
    
@yield('content')

<section class="pre-footer newsletter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <img src="{{ url('') }}/web/images/print-bgs.png" class="" alt="cro">
            </div>

            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                <div class="content">
                    <h2>Want to hear more about how we could help you?</h2>
                    <p>Sign up to our newsletter to hear the latest. <small class="text-danger">{{ $errors->first('email') }}</small></p>
                    {!! Form::open(['route'=>'web.subscribe.newsletter']) !!}
                    <div class="input-group">
                        {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Enter your email']) !!}
                        <span class="input-group-btn">
                            <button class="btn" type="submit">Subscribe Now</button>
                        </span>
                    </div>
                    
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
</section>


<footer class="footerse">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="footer-box">
                    <h3>ABOUT US</h3>
                    <p>RushPrintNYC.com offers fast,
                    high quality marketing solutions for
                    your business. Use our design
                    templates and tool to customize
                    for your message or upload your
                    own file. We offer the highest
                    quality printing when your business
                    needs it most.</p>
                    <p><img src="{{ url('') }}/web/images/autporized.png" class="" alt="cro"></p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="footer-box">
                <h3>PRODUCTS</h3>
                <ul>
                    <li><a href="{{ route('web.upload.design','business-cards') }}">Business Cards</a></li>
                    <li><a href="{{ route('web.upload.design','letterhead') }}">Letterheads</a></li>
                    <li><a href="{{ route('web.upload.design','envelopes') }}">Envelopes</a></li>
                    <li><a href="{{ route('web.upload.design','note-pads') }}">Note Pads</a></li>
                    <li><a href="{{ route('web.direct.mail') }}">Direct Mail</a></li>
                    <li><a href="{{ route('web.upload.design','postcards') }}">Postcards</a></li>
                    <li><a href="{{ route('web.upload.design','rackcards') }}">Rack Cards</a></li>
                    <li><a href="{{ route('web.upload.design','flyers') }}">Flyers</a></li>
                    <li><a href="{{ route('web.upload.design','brochures') }}">Brochures</a></li>
                    <li><a href="{{ route('web.upload.design','door-hangers') }}">Door Hangers</a></li>
                    <li><a href="{{ route('web.upload.design','posters') }}">Posters</a></li>
                    
                </ul>
            </div>
            </div>


            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="footer-box">
                <h3>INFORMATION</h3>
                <ul>
                    <li><a href="{{ route('web.about') }}">About Us</a></li>
                    <li><a href="{{ route('web.contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('web.faq') }}">FAQ’s</a></li>
                    <li><a href="{{ route('web.turnaround') }}">Turnaround</a></li>
                    <li><a href="{{ route('web.privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('web.tearms.condition') }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('web.reseller') }}">Reseller Partnerships</a></li>
                    <li><a href="{{ route('web.artwork.guideline') }}">Artwork Guidelines</a></li>
                    <li><a href="{{ route('web.blog') }}">Blog</a></li>
                    
                </ul>
            </div>
            </div>

                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="footer-box">
                <h3>MY ACCOUNT</h3>
                <ul>
                    <li><a href="{{ route('web.order') }}">My Orders</a></li>
                    <li><a href="{{ route('web.address.book') }}">Address Book</a></li>
                    <li><a href="{{ route('home') }}">My Personal Info</a></li>
                </ul>


            </div>
            </div>



            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="footer-box">
                <h3>CONTACT US</h3>
                <ul>
                    <li><a href="#">75 Sealey Avenue / Hempstead, NY 11550</a></li>
                    <li><a href="tel:5162921506" target="blank"> 516-292-1506</a></li>
                    <li><a href="mailto:info@rushprintnyc.com">info@rushprintnyc.com</a></li>
                </ul>

                    <ul class="social-all-here">
                    <li><a href="https://www.facebook.com/rushprintnyc/" target="new"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/rushprint_nyc/" target="new"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    {{-- <li><a href="#" target="new"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li> --}}
                    {{-- <li><a href="#" target="new"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> --}}
                    <li><a href="https://twitter.com/rushprint_nyc/" target="new"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.pinterest.com/rushprintn/" target="new"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                </ul>

            </div>
            </div>
        </div>
    </div>
</footer>


<section class="bottom-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <ul>
                    <li><a href="#"><img src="{{ url('') }}/web/images/bank-card-1.png" class="" alt="cro"></a></li>
                    <li><a href="#"><img src="{{ url('') }}/web/images/bank-card-2.png" class="" alt="cro"></a></li>
                    <li><a href="#"><img src="{{ url('') }}/web/images/bank-card-3.png" class="" alt="cro"></a></li>
                    <li><a href="#"><img src="{{ url('') }}/web/images/bank-card-4.png" class="" alt="cro"></a></li>
                    <li><a href="#"><img src="{{ url('') }}/web/images/bank-card-5.png" class="" alt="cro"></a></li>
                    <li><a href="#"><img src="{{ url('') }}/web/images/bank-card-6.png" class="" alt="cro"></a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <p>© 2020 Rush Print NYC. All Rights Reserved.</p>
            </div>


            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <ul class="secoip">
                    <li ><a href="#"><img src="{{ url('') }}/web/images/security.png" class="" alt="cro"></a></li>
                </ul>
            </div>


        </div>
    </div>
</section>
@if(Session::has('orderMessage'))
{{-- Confirmation PopUp begain--}}
<div class="modal fade " id="OrderConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered " role="document">
      <div class="modal-content border-0">
         <div class="modal-header flex-column justify-content-center text-center position-relative" style="background-color: #0016b8!important;">
            <h5 class="modal-title w-100" id="exampleModalLabel">Order Confirmation</h5>
            
            <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
           <h2 class="text-center position-relative p-3">
              <a href="{{ url('') }}"><img src="{{ url('') }}/web/images/logo.png" class="" alt="logo  "></a>
           </h2>
            <h3 class="text-center p-2">Your order has been confirmed!</h3>
            <p class="text-center">Order ID: {{ Session::get('order_id') }}</p>
            <p class="text-center">Order Amount: ${{ Session::get('order_amt') }}</p>
            <p class="text-center">Order Date: {{ today()->format('d-m-Y') }}</p>
         </div>
        <div class="modal-footer flex-column justify-content-center text-center position-relative">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #0016b8!important; padding-left: 30px !important; padding-right: 30px !important;">OK</button>
        </div>
      </div>
   </div>
</div>
@endif
{{-- End confirmation popUp --}}

 <!-- Modal begain-->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered " role="document">
      <div class="modal-content border-0">
         <div class="modal-header flex-column justify-content-center text-center position-relative">
            <h5 class="modal-title w-100" id="exampleModalLabel">CUSTOM REQUESTS</h5>
            <p class="text-left">We built RushPrintNYC.com to provide businesses with the common everyday tools needed to build and promote a successful business. But sometimes a business requires something extra special, something so unique its made just for you. That's where our custom work takes over. We have an extensive array of equipment at our disposal to help you create any print project you can dream up. Custom boxes and packaging? No problem. Foil embossed with a special die cut shape? We're ready for that too. From journals and booklets to specialty mailers, we can help with every aspect.         </p>
            <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="modal__form">
               <h2 class="text-center position-relative">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i> REQUEST A QUOTE 
                  <hr class="w-10">
               </h2>
               {!! Form::open(['route'=>'web.customrequest.save']) !!}
                  <div class="row">
                     <div class="col">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name','required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                        
                     </div>
                     <div class="col">
                        <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                            {!! Form::label('company_name', 'Company Name') !!}
                            {!! Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Company Name','required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('company_name') }}</small>
                        </div>
                        
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::label('email', 'Email address') !!}
                            {!! Form::email('email', null, ['class' => 'form-control','placeholder' => '','required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>
                        
                     </div>
                     <div class="col">
                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            {!! Form::label('phone_number', 'Phone Number') !!}
                            {!! Form::text('phone_number', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('phone_number') }}</small>
                        </div>
                        
                     </div>
                  </div>
                  <p class="mt-3 font-weight-bold"> Preferred Method Of Contact</p>
                  <div class="d-flex my-3">
                     <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="method_of_contact" id="emailRadios1" value="Email" checked>
                        <label class="form-check-label" for="emailRadios1">
                        Email
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="method_of_contact" id="emailRadios2" value="Telephone">
                        <label class="form-check-label" for="emailRadios2">
                        Telephone
                        </label>
                     </div>
                  </div>
                  <div class="form-group{{ $errors->has('project_detail') ? ' has-error' : '' }}">
                      {!! Form::label('project_detail', 'Project Details') !!}
                      {!! Form::textarea('project_detail', null, ['class' => 'form-control', 'required' => 'required','rows'=>5]) !!}
                      <small class="text-danger">{{ $errors->first('project_detail') }}</small>
                  </div>
                  
                  <div class="d-flex justify-content-center my-3">
                     <input type="submit" value="Submit Now!" class="btn btn-primary">
                  </div>
               {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
</div>
{{-- Model end --}}
<script src="{{ asset('web/js/jquery-3.4.1.js') }}"></script>

<script src="{{ asset('web/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('web/js/main.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#OrderConfirmation').modal();
        
    });
</script>
@if(Session::has('message'))
    @if(Session::get('type') == 'success')
        <script type="text/javascript">
            toastr.success('{{ Session::get('message') }}', 'Success!');
        </script>
    @else
        <script type="text/javascript">
            toastr.error('{{ Session::get('message') }}', 'Error!');
        </script>
    @endif

@endif
@stack('script')
<script>
    (function($) {
        $.fn.menumaker = function(options) {
            var cssmenu = $(this),
                settings = $.extend({
                    format: "dropdown",
                    sticky: false
                }, options);
            return this.each(function() {
                $(this).find(".button").on('click', function() {
                    $(this).toggleClass('menu-opened');
                    var mainmenu = $(this).next('ul');
                    if (mainmenu.hasClass('open')) {
                        mainmenu.slideToggle().removeClass('open');
                    } else {
                        mainmenu.slideToggle().addClass('open');
                        if (settings.format === "dropdown") {
                            mainmenu.find('ul').show();
                        }
                    }
                });
                cssmenu.find('li ul').parent().addClass('has-sub');
                multiTg = function() {
                    cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                    cssmenu.find('.submenu-button').on('click', function() {
                        $(this).toggleClass('submenu-opened');
                        if ($(this).siblings('ul').hasClass('open')) {
                            $(this).siblings('ul').removeClass('open').slideToggle();
                        } else {
                            $(this).siblings('ul').addClass('open').slideToggle();
                        }
                    });
                };
                if (settings.format === 'multitoggle') multiTg();
                else cssmenu.addClass('dropdown');
                if (settings.sticky === true) cssmenu.css('position', 'fixed');
                resizeFix = function() {
                    var mediasize = 1000;
                    if ($(window).width() > mediasize) {
                        cssmenu.find('ul').show();
                    }
                    if ($(window).width() <= mediasize) {
                        cssmenu.find('ul').hide().removeClass('open');
                    }
                };
                resizeFix();
                return $(window).on('resize', resizeFix);
            });
        };
    })(jQuery);

    (function($) {
        $(document).ready(function() {
            $("#cssmenu").menumaker({
                format: "multitoggle"
            });
        });
    })(jQuery);
</script>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function(){
          $('.body-alert-notification').remove();
        }, 10000);
    });

</script>

<script>
    $('.new-cd').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
</script>


<script>
    $('.new-add').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:1
            }
        }
    });
</script>
</body>

</html>