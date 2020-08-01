@extends('layouts.common')

@push('meta')
<title>{{ $product->meta_title??'rusprintnyc' }}</title>

<meta name="description" content="{{ $product->meta_descrption??'rusprint' }}">

<meta name="keywords" content="{{ $product->meta_key??'rusprint' }}">
@endpush


@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />
@endpush

@section('content')
{{-- {{ dd($product) }} --}}
<section>
   <main>
      
      <div class="section section-gray">
         <div class="section-content">
            <div class="product-details">
                <div class="product-images">
                  <div class="slider-for">
                  
                    @if($product->images->count())
                       @forelse($product->images as $im)
                        <div>
                           <img src="{{ url('storage/'.$im->image) }}" class="img-fluid" alt="Slider">
                        </div>
                       @empty

                       @endforelse
                    @else
                       <div class="preview"><img src="{{ url('') }}/web/images/prod-1.png" class="" alt="Slider"></div>
                    @endif

                    
                 </div>
                 <div class="slider-nav">
                   @forelse($product->images as $im)
                      <div>
                         <img src="{{ url('storage/'.$im->image) }}" class="img-fluid" alt="Slider">
                      </div>
                   @empty

                   @endforelse
                 </div>
                </div>
               <ul class="product-info">
                <h2>{{ $product->name }}</h2>
                  <p>{!! $product->descrption !!}</p>
                  @php

                     $proAttr = \App\ProductAttribute::where('product_id',$product->id)->orderBy('id','DESC')->get();

                  @endphp
                  {!! Form::open(['route'=>['web.cart.add',$product->id],'method'=>'get','class'=>'upload-design-form']) !!}
                  @forelse($proAttr as $art)
                  @php
                     $optionvalue = \App\ProductAttributeValue::where('product_attributes_id',$art->id)->get();
                     $optionvalueId = $optionvalue->pluck('attribute_value_id');
                     $option = \App\AttributeValue::whereIn('id',$optionvalueId)->get();
                  @endphp
                  <li class="mabgjhee">
                     <div class="form-group{{ $errors->has(App\Attribute::find($art->attribute_id)->name) ? ' has-error' : '' }}">
                         {{-- {!! Form::label(App\Attribute::find($art->attribute_id)->name, App\Attribute::find($art->attribute_id)->name,['style'=>'list-style-type:none;']) !!} --}}
                         {!! Form::select(strtolower(App\Attribute::find($art->attribute_id)->name), $option->pluck('value','id')->sort(), null, ['class' => 'form-control', 'placeholder' => App\Attribute::find($art->attribute_id)->name, App\Attribute::find($art->attribute_id)->name,'data-attributeid'=>$art->id]) !!}
                         <small class="text-danger">{{ $errors->first(strtolower(App\Attribute::find($art->attribute_id)->name)) }}</small>
                         <input type="hidden" name="{{ strtolower(App\Attribute::find($art->attribute_id)->name).'_value' }}" value="{{ $art->id }}">
                     </div>
                  </li>
                  @empty
                  @endforelse
                  {!! Form::close() !!}
                  <p style="color: #0116af;">$<span class="product-price-value" data-product_price="{{ $product->msp }}">{{ number_format($product->msp,2) }}</span></p>
                  <a href="#add-custom-design" data-toggle="modal" data-target="#add-custom-design" type="button" class="bshkwsdf">UPLOAD FILE + ORDER</a>
                  
               </ul>
            </div>
         </div>
      </div>
   </main>
</section>
@php
  $prco = App\ProductContent::where('product_id',$product->id)->get();
  // dd($prco);
@endphp
@if($prco->where('key','size1')->first() || $prco->where('key','size2')->first() || $prco->where('key','size3')->first())

@php
  $sizeSSSS = $prco->whereIn('key',['size1','size2','size3'])->all();
@endphp
<section class="prnt-mrkt">
   <div class="container">
      <h1>PAPER TYPE</h1>
      <div class="row">
         @forelse($sizeSSSS as $dsds)
         <div class="col-md-{{ 12/collect($sizeSSSS)->count() }} col-sm-{{ 12/collect($sizeSSSS)->count() }} col-12">
            <div class="mrkt-box new-mrkt-box">
               <h2><a href="#">{{ $dsds->title??'' }}</a></h2>
               <img src="{{ url('storage/'.$dsds->image??'') }}" class="" alt="Slider  ">
               <p>{{ $dsds->body??'' }}</p>
            </div>
         </div>
         @empty

         @endforelse
      </div>
   </div>
</section>
@endif

@if($prco->where('key','ptimage1')->first() || $prco->where('key','ptimage2')->first() || $prco->where('key','ptimage3')->first())
  @php
    $datdddd = $prco->whereIn('key',['ptimage1','ptimage2','ptimage3','ptimage4'])->all();  
  @endphp
<section class="prnt-mrkt">
   <div class="container">
      <h1>PAPER TYPE</h1>
      <div class="row finish-rowowo">
        @forelse($datdddd as $ppp)
         <div class="col-md-{{ 12/collect($datdddd)->count() }} col-sm-{{ 12/collect($datdddd)->count() }} col-12">
            <div class="mrkt-box new-mrkt-box">
               <h2><a href="#">{{ $ppp->title??'' }}</a></h2>
               <img src="{{ url('storage/'.$ppp->image??'') }}" class="" alt="Slider  ">
               <p>{{ $ppp->body??'' }}</p>
            </div>
         </div>
         @empty

         @endforelse
         
      </div>
   </div>
</section>
@endif
<!-- Services section -->
<section id="what-we-do">
   <div class="container">
      <h1>WHY CHOOSE RUSH PRINT NYC</h1>
      <div class="row mt-5">
         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
               <div class="card-block block-1">
                  <h3 class="card-title">Quality <span class="upldse"><img src="{{ url('') }}/web/images/nyc-1.png" class="" alt="cro"></span></h3>
                  <div class="min_point_list customfont3" ><p> We understand your image is on the line with every job we print. Aresponsibility we take seriously and is why we have an intensivetriple check quality compliance process that each job must pass.</p> 
                  <ul class="list-unstyled">
                 <li> - All art is reviewed prior to printing.</li>
                 <li> - Each job is run by itself to ensure that best color possible.</li>
                 <li> - Each job is inspected prior to shipping after finishing.</li>
                 <li> - We get your job right the first time, every time.</li>
                  </ul>
               </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
               <div class="card-block block-2">
                  <h3 class="card-title">Reliable <span class="upldse"><img src="{{ url('') }}/web/images/nyc-2.png" class="" alt="cro"></span></h3>
                  <div class="min_point_list customfont3"><p> We didn't become one of New York's most popular printers byaccident. It took twenty years of getting it done, when other said itcouldn't be done. Being there for our clients when they neededus most. We know there are lot of options out there, we enjoybeing the one that comes through when you need us most.</p> 
                  <ul class="list-unstyled">
                 <li> - State of art equipment.</li>
                 <li> - 20 years experience.</li>
                 <li> - Working to make you look better.</li>
                  </ul>
               </div>
                  <!-- {!! (($prco->where('key','reliable')->first())?$prco->where('key','reliable')->first()->body:'') !!} -->
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
               <div class="card-block block-3">
                  <h3 class="card-title">Speed<span class="upldse"><img src="{{ url('') }}/web/images/nyc-3.png" class="" alt="cro"></span></h3>
                  <div class="min_point_list customfont3"><p>Time is money and everyday you wait, is an opportunity missed.We start working on your job as soon as your order is placed.Our production times are consistently among the industry best.</p> 
                  <ul class="list-unstyled">
                 <li> - All work is done on state of the art equipment.</li>
                 <li> - Computer controlled cutting and finishing.</li>
                 <li> - When you need it now you need us.</li>
                  </ul>
               </div>
                  <!-- {!! (($prco->where('key','speed')->first())?$prco->where('key','speed')->first()->body:'') !!} -->
               </div>
            </div>
         </div>
      </div>
      
   </div>
</section>

<!-- Modal begain-->
<div class="modal fade" id="add-custom-design" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered " role="document">
      <div class="modal-content border-0">
         <div class="modal-header flex-column justify-content-center position-relative">
            <h3 class="modal-title w-100" id="exampleModalLabel">CUSTOM REQUESTS</h3>
         </div>
         <div class="modal-body">
            <div class="row">
               <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 0 10px 0 10px">
                  <div class="w-50">
                     <h2>Recommended For Best Results:</h2>
                     <p>High Resolution Graphics prefered (300dpi or better)<br>File designed in CMYK format<br>Files size must be less than 50MB.</p>
                     <h2>Prefered File Types:</h2>
                     <p>Vector-based files (.EPS,AI, or .PDF)<br>Raster files(.PNG) with transparent background.</p>
                  </div>
                  <div class="w-50 float-right">
                     <h2>Name Your Files:</h2>
                     <p>Specify item's side in filename and exclude spaces.<br>Replace spaces with an underscore.<br>EXAMPLE: front.pdf,back.pdf,page_3.jpg.</p>
                     <h2>Other Accepted File Types:</h2>
                     <p>.TIFF or .JPEG/.JPG.</p>
                  </div>
               </div>
            </div>
            <form method="post" action="{{ route('upload-designfile-upload',$product->id) }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
               @csrf
            </form>
            <br>
            {{-- <div class="table-responsive">
               <table class="table table-bordered">
                  <thead>
                     <tr>
                       <th>SI</th>
                       <th>Image</th>
                       <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td>1</td>
                         <td>1</td>
                         <td>1</td>
                      </tr>
                   </tbody>
               </table>
            </div> --}}
            <a href="javascript:void(0)" class="btn btn-success float-right" id="upload-design-btn">Done Uploading</a>
         </div>
      </div>
   </div>
</div>
{{-- Model end --}}
@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>

<script type="text/javascript">
   Dropzone.options.dropzone = {
       maxFilesize: 12,
       renameFile: function(file) {
           var dt = new Date();
           var time = dt.getTime();
          return time+file.name;
       },
       acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf,.ai,.eps",
       addRemoveLinks: true,
       timeout: 5000,
       success: function(file, response) 
       {
           console.log(response);
       },
       error: function(file, response)
       {
          return false;
       }
   };

   $('#upload-design-btn').click(function() {
      $('form.upload-design-form').submit();
   })

   $('select.form-control').change(function() {

      var values = $('.upload-design-form').serialize();

      $.ajax({
        url: "{{ url('get-product-price') }}?"+values, success: function(result){
         
         $('span.product-price-value').text(parseInt(result).toFixed(2));
      }});
   })

</script>

<script>
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
</script>
@endpush