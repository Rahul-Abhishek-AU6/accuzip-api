@extends('layouts.common')

@push('meta')
<title>Print Marketing Materials | Custom Marketing Materials</title>

<meta name="description" content="Buying custom printed marketing materials with RushPrintNYC. We offer a wide array of custom brochures, custom rack cards, and custom door hangers.">

<meta name="keywords" content="print marketing materials, custom marketing materials, custom printed marketing materials">
@endpush

@push('style')

@endpush

@section('content')
<section class=" sldr">
    <img src="{{ url('') }}/web/images/inner-1.png" class="" alt="Slider  ">
    <div class="marketing-maters">
    <h2>MARKETING MATERIALS</h2>
    {{-- <ul class="m-m">
        <span><a href="#">Home / </a></span>
        <span><a href="#"> Marketing-Materials </a></span>
      
    </ul> --}}


</section>





<section class="half-a">
    <div class="container">
        <div class="define-brand">
        <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <img src="{{ url('') }}/web/images/half-a.png" class="" alt="Slider  ">
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="right-market">
                    <h1>DEFINE YOUR BRAND</h1>
                    <h4>The right marketing materials help you tell your story clearly</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<section class="prnt-mrkt">
    <div class="container">
        <h1>MARKETING MATERIALS TO GROW YOUR BUSINESS</h1>
        <div class="row">
            @forelse(App\Product::whereIn('id',[7,8,9,10,11,12])->where('status','1')->limit(6)->with('images')->get() as $p)
            <div class="col-md-4 col-sm-4 col-12">
                <div class="mrkt-box new-mrkt-box market-list">
                    <h2><a href="{{ route('web.upload.design',$p->slug) }}"> {{ $p->name }}  </a></h2>
                    
                    
                    @if($p->id == 7)
                    	<div class="product_img">
                            <img src="{{ url('web/images/marketing/16.jpg') }}" class="" alt="Slider">
                        </div>
                    	<p>Not all postcards have to be mailed. Great as handouts and for In-store promotions. Full color available in coated or uncoated stocks.</p>
                    @endif
                    @if($p->id == 8)
                    	<div class="product_img">
                            <img src="{{ url('web/images/marketing/17.jpg') }}" class="" alt="Slider">
                        </div>
                    	<p>Rack Cards are the perfect choice for individual products or services. Convenient size that fits in most plastic holders. Full color available in coated or uncoated stocks.</p>
                    @endif
                    @if($p->id == 9)
                    	<div class="product_img">
                            <img src="{{ url('web/images/marketing/18.jpg') }}" class="" alt="Slider">
                        </div>
                    	<p>Our high quality flyers are printed on either gloss or silk coated text available in standard or heavy weight text. Great when you have a lot of content to convey to your customers.</p>
                    @endif
                    @if($p->id == 10)
                    	<div class="product_img">
                            <img src="{{ url('web/images/marketing/19.jpg') }}" class="" alt="Slider">
                        </div>
                    	<p>Our high quality brochures are available in 3 (tri-fold) or 4 (half & half) panel versions, perfect to convey everything about your company to your clients in a professional manner.</p>
                    @endif
                    @if($p->id == 11)
                    	<div class="product_img">
                            <img src="{{ url('web/images/marketing/20.jpg') }}" class="" alt="Slider">
                        </div>
                    	<p>The perfect way to say sorry we missed you, but make sure you don’t miss us. Printed on coated or uncoated cover stock and die cut to fit most door handles.</p>
                    @endif
                    @if($p->id == 12)
                    	<div class="product_img">
                            <img src="{{ url('web/images/marketing/21.jpg') }}" class="" alt="Slider">
                        </div>
                    	<p>Get noticed and bring your business or event the attention it deserves. Full color available on either our thick gloss or uncoated cover stock or heavy weight gloss coated text.</p>
                    @endif
                    
                    <a href="{{ route('web.upload.design',$p->slug) }}" class="get-start">Get Started</a>
                </div>
            </div>

            @empty

            @endforelse
            
        </div>

        



    </div>
</section>






<section class="Buying Custom">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Buying Custom Printed Marketing Materials?</h2>
            <p>It can be easy with RushPrintNYC.com. We offer a wide array of custom brochures, custom rack cards, and custom door hangers so you can make a positive impression on your existing and future customers.</p>
        </div>
    </div>
</div>
</section>
@endsection

@push('script')

@endpush