@extends('layouts.common')

@push('style')

@endpush

@section('content')
<section class=" sldr">
    <img src="{{ url('') }}/web/images/office-stasinary.png" class="" alt="Slider  ">
    <div class="marketing-maters">
    <h2>OFFICE STATIONERY</h2>
    {{-- <ul class="m-m">
        <span><a href="#">Home / </a></span>
        <span><a href="#"> Office _Stationery </a></span>
      
    </ul> --}}


</section>




<section class="half-a">
    <div class="container">
        <div class="define-brand">
        <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <img src="{{ url('') }}/web/images/half-b.png" class="" alt="Slider  ">
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="right-market">
                        <h1>STATIONERY SENDS A MESSAGE</h1>
                        <h4>make sure its the right one....
                            with custom stationery
                            branded for your company.
                        </h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>






 <section class="ofc-stag-new">
    <div class="container">
        <h1 class="bbsb">OFFICE STATIONERY FOR YOUR BUSINESS</h1>
        <div class="row">
            
            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="{{ route('web.upload.design','business-cards') }}">Business Cards  </a></h2>
                    
                    
                        <div class="product_img">
                            <img src="{{ url('web/images/marketing/3.jpg') }}" class="" alt="Slider">
                        </div>
                        <p class="p-0 m-0 w-100" style="text-align: center !important; font-size:14px;">- All cards printed on super thick stock</p>
                        <p class="p-0 m-0 w-100" style="text-align: center !important; font-size:14px;">- Coated or uncoated finishes</p>
                        <p class="p-0 m-0 w-100" style="text-align: center !important; font-size:14px;">- Full color printing on both sides</p>
                        <p class="p-0 m-0 w-100" style="text-align: center !important; font-size:14px;">- High Gloss UV Coating available</p>
                                                                                                                                            
                    <a href="{{ route('web.upload.design','business-cards') }}" class="get-start">Get Started</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="{{ route('web.upload.design','letterhead') }}"> Letterhead </a></h2>
                    
                    
                        <div class="product_img">
                            <img src="{{ url('web/images/marketing/4.jpg') }}" class="" alt="Slider">
                        </div>
                        <p class="p-0 w-100 m-0" style="text-align: center !important; font-size:14px;">- Printed on the highest quality paper</p>
                        <p class="p-0 w-100 m-0" style="text-align: center !important; font-size:14px;">- Compatible with all office printers</p>
                        <p class="p-0 w-100 m-0" style="text-align: center !important; font-size:14px;">- Brilliant full width, full color printing</p>
                        <p class="p-0 w-100 m-0" style="text-align: center !important; font-size:14px;">- Low quantities for small offices</p>
                                                                                                                                            
                    <a href="{{ route('web.upload.design','letterhead') }}" class="get-start">Get Started</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="{{ route('web.upload.design','envelopes') }}"> Envelopes   </a></h2>
                    
                    
                        <div class="product_img">
                            <img src="{{ url('web/images/marketing/5.jpg') }}" class="" alt="Slider">
                        </div>
                            <p class="w-100 p-0 m-0" style="text-align: center !important; font-size:14px;">- Full color envelopes</p>
                            <p class="w-100 p-0 m-0" style="text-align: center !important; font-size:14px;">- Match your letterhead perfectly</p>
                            <p class="w-100 p-0 m-0" style="text-align: center !important; font-size:14px;">- Available on same paper as letterheads</p>
                            <p class="w-100 p-0 m-0" style="text-align: center !important; font-size:14px;">- Make a statement with your mail</p>
                                                                                                                                            
                    <a href="{{ route('web.upload.design','envelopes') }}" class="get-start">Get Started</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="{{ route('web.upload.design','note-pads') }}"> Note Pads   </a></h2>
                    
                    
                        <div class="product_img">
                            <img src="{{ url('web/images/marketing/6.jpg') }}" class="" alt="Slider">
                        </div>
                            <p class="w-100 p-0 m-0" style="text-align: center !important; font-size:14px;">- Stay organized and on brand</p>
                            <p class="w-100 p-0 m-0" style="text-align: center !important; font-size:14px;">- Oversized 5” x 8” writing area</p>
                            <p class="w-100 p-0 m-0" style="text-align: center !important; font-size:14px;">- 50 Full Color Sheets per pad</p>
                            <p class="w-100 p-0 m-0" style="text-align: center !important; font-size:14px;">- Chipboard backed</p>
                                                                                                                                            
                    <a href="{{ route('web.upload.design','note-pads') }}" class="get-start">Get Started</a>
                </div>
            </div>

        </div>

        {{-- <span class="new-sdh"><a href="#" class="get-start ">Get Started</a></span> --}}
    </div>
</section>




<section class="Buying Custom">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Custom Business Stationery</h2>
            <p>At RushPrintNYC.com, we know your brand is important. To represent your brand, you need high quality office stationery that has sharp image printing. We’re a provider of premium business cards, letterhead, envelopes, and notepads with a very small minimum order quantity.</p>
        </div>
    </div>

    <div class="row new-gaps">
        <div class="col-md-12">
            <h2>Need a Design for Your Office Stationery?</h2>
            <p>High quality office stationery is still possible to achieve, even without a designer. Check out our templates or design your own with our online design service. Select which product you’d like to customize online or upload your design. We make it easy for a high quality custom product every time. We even offer templates for different industries. Check out our realty business cards or chiropractic business letterhead.</p>
        </div>
    </div>


</div>
</section>
@endsection

@push('script')

@endpush