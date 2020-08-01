@extends('layouts.common')

@push('meta')
<title>Rusprintnyc</title>

<meta name="description" content="">

<meta name="keywords" content="">
@endpush

@push('style')

@endpush

@section('content')
<section class="sldr overview__inner  position-relative">
        <img src="{{ url('') }}/images/over-img.png" class="w-100" alt="Slider  ">
        <div class="position-absolute text-white d-flex justify-content-center align-items-center flex-column">
            <h2>How OUR campaigns work…</h2>
            <p> and why they offer you the most value and performance.</p>
        </div>
    </section>

    <section class="become">
        <div class="container">
            <h3 class="text-center">Build your best performing mail campaign in 3 easy steps</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="become__box">
                        <img src="{{ url('') }}/images/over-img-1.png" alt="">
                        <h4><a href="#0">1: Select your new customers</a></h4>
                        <p>Our powerful and accurate mapping software allows you to build either EDDM or Targeted Direct Mail Lists in minutes. Customize either by geography such as postal routes for EDDM or use demographic and geographic filters to build
                            a targeted mailing list with laser focus. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="become__box">
                        <img src="{{ url('') }}/images/over-img-2.png" alt="">
                        <h4><a href="#0">2: Build Your Campaign</a></h4>
                        <p>We make it easy and take out all the guess work, either upload your own files or work directly with one of our professional designers to craft the perfect message. Then choose which digital marketing channels you want to combine
                            with your mail. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="become__box">
                        <img src="{{ url('') }}/images/over-img-3.png" alt="">
                        <h4><a href="#0">3: REACH THEM FIRST</a></h4>
                        <p>With our online mail processing tools all of your mail is tracked and accounted for, you’ll always know when & where your mail went. Our standard 2 day production time is unmatched helping you see results sooner </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="become we_provide">
        <div class="container">
            <h3 class="text-center">Build your best performing mail campaign in 3 easy steps</h3>
            <p>Never before has it been this easy to find new customers, build a campaign and launch it this fast</p>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="provide__box">
                        <ul>
                            <li>Powerful and Accurate Mapping Tool Finds Ideal New Customers</li>
                            <li> Professional Design Assistance & Marketing Help - We Know What Works!</li>
                            <li> Full-Color Printing on Both Sides</li>
                            <li> Optional Metallic Gold or Silver Ink</li>
                            <li> Increase the ROI of Your Campaign By Adding Facebook Ads, Display Ads, or Email Marketing </li>
                            <li> Heavy 14pt Coated Postcard Cover</li>
                            <li> Standard 2 Day Production </li>
                            <li> All Mailing Preparation, Paperwork & Deliver to the Post Office</li>
                            <li> Postage is INCLUDED!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="become bg-white">
        <div class="container">
            <h3 class="text-center">Our Advanced Mapping Software Builds <br> Both EDDM & Targeted Mail Lists In Minutes</h3>
            <div class="text-center">
                <img src="{{ url('') }}/images/map-recording.png" alt="">
            </div>

            <h4 class="text-center">We Make Finding New Customers Easier!</h4>

        </div>
    </section>


    <section class="become mailing__easy">
        <div class="container">
            <h3 class="text-center">Choosing the Right Type of Mailing is Easy!</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="become__box">
                        <h4><a href="#0">EDDM Wins When:</a></h4>
                        <ul>
                            <li>The Product Has Mass Appeal, Great For Restaurants </li>
                            <li> Most of Your Business Comes From A Specific Area </li>
                            <li>You Want to Mail to Every House On the Block </li>
                        </ul>
                        <div class="text-center"> <a href="{{ route('how.we.work') }}" class="btn"><span>Get Started</span> </a></div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="become__box">
                        <h4><a href="#0">Target Direct Mail Is Best When:</a></h4>
                        <ul>
                            <li> Reaching a specific audience </li>
                            <li> Filtering by Geography and Demographics </li>
                            <li>Building Specific Consumer or Business Mailing Lists</li>
                            <li> You Need Verified Data On Consumers or Businesses</li>
                        </ul>
                        <div class="text-center"> <a href="{{ route('how.we.work') }}" class="btn"><span>Get Started</span> </a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="become we_provide become__week" style="background: #5766d0;">
        <div class="container">
            <h3 class="text-center">We have the quickest standard production, just 2 days! Or Schedule Your Mail According To Your Marketing Calendar </h3>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-2">
                    <img src="{{ url('') }}/images/cal-1.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="{{ url('') }}/images/monday.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="{{ url('') }}/images/tuesday.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="{{ url('') }}/images/wednesday copy.png" alt="">
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-2 d-flex align-items-center">
                    <h3 class="display-2 text-center">OTHER PRINT SHOP</h3>
                </div>
                <div class="col-md-2">
                    <img src="{{ url('') }}/images/monday.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="{{ url('') }}/images/tuesday.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="{{ url('') }}/images/wednesday copy.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="{{ url('') }}/images/thursday.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="{{ url('') }}/images/friday copy 2.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="become mailing__easy  fb-area">
        <div class="container">
            <h3 class="text-center mb-2">Increase the ROI of Your Campaign By Adding Facebook Ads,<br> and Email Marketing to any mail campaign </h3>
            <h4 class="text-center mb-4">By adding our Facebook Ads and Email Marketing Programs to your mail campaign <br> you create a multi channel approach that increases your results exponentially. </h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="become__box">
                        <img src="{{ url('') }}/images/fb-img.png" alt="">
                        <h4><a href="#0">Facebook Ads</a></h4>
                        <ul>
                            <li>Delivered to the same audience as your mail </li>
                            <li> Your audience receives one Facebook Ad daily for 30 days </li>
                            <li> Targeted using advanced software for the greatest match rates </li>
                            <li>Includes Design, Setup and Ad Spend - No Surprise Costs </li>
                            <li> Only 1.5 cents per impression </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="become__box">
                        <img src="{{ url('') }}/images/fb-img-1.png" alt="">
                        <h4><a href="#0">Email Marketing</a></h4>
                        <ul>
                            <li>Delivered to the same audience as your mail </li>
                            <li> Includes 1 high quality HTML email blast with every mailing</li>
                            <li>We can usually match up to 50% of your mail list with a verified email</li>
                            <li> Only pay for delivered emails</li>
                            <li> A fantastic way to build your own Email marketing data base</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="become we_provide find_become" style="background: #0017b8;">
        <div class="container">
            <h3 class="text-center find-title">Find More Customers Now!</h3>
            <div class="text-center"> <a href="{{ route('how.we.work') }}" class="btn btn-get"><span>Get Started</span> </a></div>

        </div>
    </section>
    <section class="become bg-white ">
        <div class="container">
            <h3 class="text-center">Frequently Asked Questions </h3>
            <ul class="list-unstyled">
                <li>
                    <h5> Q: What kind of printing is it and what type of paper is used?</h5>
                    <p> A: All of our postcards are printed in beautiful full color on both sides on super heavy 14pt Coated Cover no flimsy paper here. </p>
                </li>
                <li>
                    <h5>Q: Is there a minimum quantity?</h5>
                    <p>A: Our minimum is 1000 pieces. </p>
                </li>
                <li>
                    <h5>Q: How long does production take?</h5>
                    <p>A: Only 2 days, it is the fastest standard production time in the printing industry. </p>
                </li>
                <li>
                    <h5>Q: Is my postage included in this price?</h5>
                    <p>A: Yes of course! There are no hidden fees, we handle everything for you!</p>
                </li>

            </ul>


        </div>
    </section>
    
@endsection

@push('script')

@endpush