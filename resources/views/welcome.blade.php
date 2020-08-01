@extends('layouts.common')

@push('meta')
<title>Rush Printing | Postcard Mailing Services | Custom Printing</title>

<meta name="description" content="Get the best printing and mailing services at RushPrintNYC in NY. We specialize in office stationery, business cards, direct mail, marketing materials and posters.">

<meta name="keywords" content="postcard mailing services, direct mail campaign, printing and mailing services, Rush printing NYC, Direct mail list locator, Direct mail list locator New York, Direct mail list locator NY">
@endpush

@push('style')

@endpush

@section('content')
<section class="sldr">
    <img src="{{ url('') }}/web/images/guy.png" class="" alt="Slider  ">
</section>

<section class="prnt-mrkt">
    <div class="container">
        <h1>YOUR DIRECT MAIL & PRINT MARKETING SOLUTION</h1>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box">
                    <img src="{{ url('') }}/web/images/prs-1.png" class="" alt="Slider  ">
                    <h2 style="text-align:center;"><a href="{{ route('web.office.stationary') }}">Office Stationery </a></h2>
                    <ul class="ofc-stas">
                        <li>SUPERIOR QUALITY BUSINESS CARDS, LETTERHEADS, ENVELOPES & NOTE PADS</li>
                        <li>PREMIUM PAPERS; LASER SAFE</li>
                        <li>MATTE, GLOSS & UNCOATED FINISHES</li>
                        <li>SHORT PRINT RUNS</li>
                        <li>PROFESSIONAL EDITABLE TEMPLATES</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box">
                    <img src="{{ url('') }}/web/images/prs-2.png" class="" alt="Slider  ">
                    <h2 style="text-align:center;"><a href="{{ route('web.direct.mail') }}">Direct Mail</a></h2>
                    <ul class="ofc-stas">
                        <li>DESIGN, PRINT & MAIL ALL IN ONE PLACE!</li>
                        <li>LIST LOCATOR™ USES VERIFIED DATA & YOUR 
                            CRITERIA TO BUILD A MAIL LIST THAT PERFORMS</li>
                        <li>IN THE MAIL WITHIN 1 DAY</li>
                        <li>SHORT PRINT RUNS FOR YOUR SCHEDULE & BUDGET</li>
                        <li>THE LARGEST SIZES THAT STAND OUT</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box">
                    <img src="{{ url('') }}/web/images/prs-3.png" class="" alt="Slider  ">
                    <h2 style="text-align:center;"><a href="{{ route('web.marketing.meterial') }}"> Marketing Material</a></h2>
                    <ul class="ofc-stas">
                        <li>CUSTOMIZED AND BEAUTIFULLY CRAFTED POSTCARDS</li>
                        <li>DESIGNER FLYERS WITH DURABLE PAPER </li>
                        <li>CREATIVELY DESIGNED BROCHURES WITH ATTRACTIVE ICONS AND IMAGES</li>
                        <li>PERSONALISED DOOR HANGERS WITH PREMIUM, THICK GLOSSY CARDSTOCK</li>
                        <li>QUALITY RACK CARDS AVAILABLE IN DIFFERENT PAPER STOCKS</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box">
                    <img src="{{ url('') }}/web/images/prs-4.png" class="" alt="Slider  ">
                    <h2 style="text-align:center;"><a href="#exampleModal" data-toggle="modal" data-target="#exampleModal">Custom Request</a></h2>
                    <ul class="ofc-stas">
                        <li>WE ARE THE PRINT EXPERTS!</li>
                        <li>MEDIA KITS & COORDINATED CAMPAIGNS</li>
                        <li>PACKAGE DESIGN & PRODUCTION</li>
                        <li>METALLIC GOLD & SILVER INKS</li>
                        <li>WIDE FORMAT PRINTING</li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="site-wrapper">
    <div class="container">
        <h2>THE RUSHPRINTNYC.COM DIFFERENCE</h2>
        <div class="row">
            <div class="vido">            
                <iframe title="vimeo-player" src="https://player.vimeo.com/video/196000672" width="640" height="360" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        
    </div>
</section>



<section class="prnt-mrkt">
    <div class="container">
        <h2>WHY RUSH PRINT NYC...</h2>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <img src="{{ url('') }}/web/images/rush-1.png" class="" alt="Slider  ">
                    <h2><a href="#">Design</a></h2>
                   <ul class="list-unstyled text-center">
                       <li>- Professional design when <br> you need it most</li>
                       <li>- Upload your own files</li>
                       <li>- All files professionally <br>reviewed before print</li>
                   </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <img src="{{ url('') }}/web/images/rush-2.png" class="" alt="Slider  ">
                    <h2><a href="#">High Quality Print</a></h2>
                   <ul class="list-unstyled text-center">
                       <li>- Industry Leading Print Quality</li>
                       <li>- Highest Quality Papers</li>
                       <li>- Precision Finishing</li>
                   </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <img src="{{ url('') }}/web/images/rush-3.png" class="" alt="Slider  ">
                    <h2><a href="#">In a NYC Minute</a></h2>
                    <ul class="list-unstyled text-center">
                       <li>- Most items ship in 24-48 hours</li>
                       <li>- Reliability you can Trust</li>
                       <li>- Save Time, Sell More</li>
                   </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <img src="{{ url('') }}/web/images/rush-4.png" class="" alt="Slider  ">
                    <h2><a href="#">To Get You Results</a></h2>
                    <ul class="list-unstyled text-center">
                       <li>- Triple Quality Inspection </li>
                       <li>- We get it right the first time</li>
                       <li>- We’re satisfied when you are</li>
                   </ul>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="mng-crous">
    
    <div class="container">
    <h2 class="mb-md-3">Top Products</h2>
        <div class="row">
            <div class="owl-carousel new-cd owl-theme">
                @forelse(App\Product::where('status','1')->with('images')->get() as $p)
                <div class="item">
                    <div class="box-the">
                        <img src="{{ url('storage/'.$p->images->first()->image) }}" class="" alt="cro" style="max-height: 180px;">
                        <h3>
                            <span class="dir"><a href="{{ route('web.upload.design',$p->slug) }}">{{ $p->name }}</a></span> <span class="dir"><a href="{{ route('web.upload.design',$p->slug) }}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>
                        </h3>
                    </div>
                </div>
                @empty

                @endforelse
                
            </div>
        </div>
    </div>
</section>


<section class="testy-monil">
    <div class="container">
        <h1 style="color:##0016b8">Happy Clients</h1>
        <div class="row">
            <div class="owl-carousel new-add owl-theme">
                @forelse(App\Testimonial::all() as $tm)

                <div class="item">
                    <div class="testimonial-box">
                        <div class="quote">
                        <img src="{{ url('') }}/web/images/quote.png" class="w-auto" alt="cro  ">
                        </div>
                        <div class="team-clnts">
                            <img src="{{ url('storage/'.$tm->image) }}" class="teamImg" alt="cro" style="width: 76px !important;">
                            <h5>{{ $tm->name }}</h5>
                            <h6 class="font-italic mb-3">{{ $tm->company_name }}</h6>
                            <p>{{ $tm->message }}</p>

                        </div>
                        <div class="quote q-bottom">
                        <img src="{{ url('') }}/web/images/quote.png" class="w-auto" alt="cro  ">
                        </div>
                    </div>
                </div>                  
                @empty

                @endforelse
            </div>
            
        </div>
    </div>
</section>



<section id="what-we-do">
    <div class="container">
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-block block-1">
                        <h3 class="card-title"><span><img src="{{ url('') }}/web/images/srrvice-1.png" class="" alt="cro"></span>Office Stationery</h3>
                        <p class="card-text">Want to make your business stand out without breaking the bank? Custom printed office stationery is an easy decision to make that will help you break out from your competitors. Even in the digital age, business cards, custom letterhead, envelopes, and notepads can make you stand out even in a crowded field. RushPrintNYC.com offers all four of these materials with fast and free shipping on orders over $100.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-block block-2">
                        <h3 class="card-title"><span><img src="{{ url('') }}/web/images/srrvice-2.png" class="" alt="cro"></span> Business Cards Online</h3>
                        <p class="card-text">Business cards serve a number of purposes that are beneficial to your business or organization. They show professionalism and preparedness at networking events. Business cards help your future customers contact you, and even better, pass along your information to others who may need your services. In 2017, there is simply no excuse to not have a professional and custom business card.</p>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-block block-3">
                        <h3 class="card-title"><span><img src="{{ url('') }}/web/images/srrvice-3.png" class="" alt="cro"></span> Letterhead</h3>
                        <p class="card-text">Sending an email simply lacks the personal touch that professionally printed custom letterhead does. When sending thank you letters, invoices, job offer letters, or other professional correspondence, having professional letterhead adds the right style to ensure that people don’t forget you or your organization.</p>
                        
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-block block-4">
                        <h3 class="card-title"><span><img src="{{ url('') }}/web/images/srrvice-4.png" class="" alt="cro"></span> Envelopes</h3>
                        <p class="card-text">Naturally, if you are sending letters, custom printed envelopes are a natural extension of keeping your brand consistent. Additionally, you can save time by not having to apply a return label to each envelope, increasing your efficiency and saving money</p>
                        
                    </div>
                </div>
            </div>
            
        </div>


        <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-block block-5">
                        <h3 class="card-title"><span><img src="{{ url('') }}/web/images/srrvice-5.png" class="" alt="cro"></span> Notepads</h3>
                        <p class="card-text">Many companies like to keep branding consistent even on internal notes. Custom notepads from RushPrintNYC are perfect in helping you track to-do’s and reminders.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-block block-6">
                        <h3 class="card-title"><span><img src="{{ url('') }}/web/images/srrvice-6.png" class="" alt="cro"></span> Direct Mail</h3>
                        <p class="card-text">Custom direct mail postcards are a great way to generate new business. According to the Direct Mailing Association, direct mail cards on average receive a 3.7% response rate. With our low prices, the cost per new customer acquisition is very low. Our postcards basically pay for themselves! We offer 6”x9" direct mail postcards and jumbo 6”x11" direct mail postcards.</p>
                        
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-block block-5">
                        <h3 class="card-title"><span><img src="{{ url('') }}/web/images/srrvice-7.png" class="" alt="cro"></span> Marketing Materials</h3>
                        <p class="card-text">Getting your message across to potential customers is made easy by creating marketing materials to get the word out. Our prices on our premium custom rack cards, flyers, z fold brochures, and posters make it possible to generate more revenue by grabbing future customer’s attention.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-block block-6">
                        <h3 class="card-title"><span><img src="{{ url('') }}/web/images/srrvice-8.png" class="" alt="cro"></span> Custom Online Printing</h3>
                        <p class="card-text">RushPrintNYC is not a fly-by-night online print shop. We are a full service union print shop and are able to do custom printing for a number of different applications. Get in touch with us to talk about your online printing needs.</p>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>  
</section>
@endsection

@push('script')

@endpush