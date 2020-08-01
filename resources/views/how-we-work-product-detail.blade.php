@extends('layouts.common')

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
@endpush

@section('content')
<section>
   <main>
      <div class="fliasjhdc">
         <h2>{{ $product->name }}</h2>
         <ul class="m-m gghjz">
            <span><a href="#">Home / </a></span>
            <span><a href="#">Office Stationery</a></span>
            <span><a href="#">/ Business Cards</a></span>
            <span><a href="#">/ Upload Your Design</a></span>
         </ul>
      </div>
      <div class="section section-gray">
         <div class="section-content">
            <div class="product-details">
               <ul class="product-images">
                  
                  @if($product->images->count())
                     <li class="preview"><img src="{{ url('storage/'.$product->images->first()->image) }}" class="" alt="Slider"></li>
                  @else
                     <li class="preview"><img src="{{ url('') }}/web/images/prod-1.png" class="" alt="Slider"></li>
                  @endif

                  @forelse($product->images as $im)
                  <li>
                     <a href="javascript:void(0)"><img src="{{ url('storage/'.$im->image) }}" class="" alt="Slider"></a>
                  </li>
                  @empty

                  @endforelse
               </ul>
               <ul class="product-info">
                  <p>Our business cards are offered in three sizes, Standard 3.5”x2”, European Oversized 3.375”x2.125” & Square
                     2.125”x2.125”. Each are available in 14pt or 16pt Gloss Coated Cover or 16pt Uncoated Cover. Both 14pt
                     and 16pt Coated Cover Business Cards are available with Gloss UV Coating on 1 side or 2 sides. Please keep
                     in mind you cannot write in pen on UV coating.
                  </p>
                  @php

                     $proAttr = \App\ProductAttribute::where('product_id',$product->id)->orderBy('id','DESC')->get();

                  @endphp
                  {!! Form::open(['route'=>['web.update-quote.how.we.work'],'class'=>'upload-design-form']) !!}

                  @foreach($data as $key => $value)
        
                    <div class="form-group">
                      <label>{{ $key }}</label>
                      <input type="hidden"  class="form-control" name="{{ $key }}" value="{{ $value }}">
                    </div>

                  @endforeach

                  @forelse($proAttr as $art)
                  @php
                     $optionvalue = \App\ProductAttributeValue::where('product_attributes_id',$art->id)->get();
                     $optionvalueId = $optionvalue->pluck('attribute_value_id');
                     $option = \App\AttributeValue::whereIn('id',$optionvalueId)->get();
                  @endphp
                  <li class="mabgjhee">
                     <div class="form-group{{ $errors->has(App\Attribute::find($art->attribute_id)->name) ? ' has-error' : '' }}">
                         {!! Form::label(App\Attribute::find($art->attribute_id)->name, App\Attribute::find($art->attribute_id)->name,['style'=>'list-style-type:none;']) !!}
                         {!! Form::select(strtolower(App\Attribute::find($art->attribute_id)->name), $option->pluck('value','id'), null, ['class' => 'form-control', 'placeholder' => '--Select One---','data-attributeid'=>$art->id]) !!}
                         <small class="text-danger">{{ $errors->first(strtolower(App\Attribute::find($art->attribute_id)->name)) }}</small>
                         <input type="hidden" name="{{ strtolower(App\Attribute::find($art->attribute_id)->name).'_value' }}" value="{{ $art->id }}">
                     </div>
                  </li>
                  @empty
                  @endforelse
                  {!! Form::close() !!}
                  <p style="color: #0116af;">$<span class="product-price-value" data-product_price="{{ $product->msp }}">{{ number_format($product->msp,2) }}</span></p>
                  <a href="#add-custom-design" data-toggle="modal" data-target="#add-custom-design" type="button" class="bshkwsdf">Upload file $ Order</a>
                  
               </ul>
            </div>
         </div>
      </div>
   </main>
</section>
<section class="prnt-mrkt">
   <div class="container">
      <h1>CHOOSE YOUR SIZE</h1>
      <div class="row">
         <div class="col-md-4 col-sm-4 col-12">
            <div class="mrkt-box new-mrkt-box">
               <h2><a href="#">Standard 3.5" X 2"</a></h2>
               <img src="{{ url('') }}/web/images/size-1.png" class="" alt="Slider  ">
               <p>The only thing standard about these
                  cards Is there size. Printed on
                  high quality thick stock.
               </p>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="mrkt-box new-mrkt-box">
               <h2><a href="#">Oversize 3.375" X 2.125</a></h2>
               <img src="{{ url('') }}/web/images/size-2.png" class="" alt="Slider  ">
               <p>
                  These cards are just slightly larger than
                  standard, Just enough to tell your clients
                  something is different about you
               </p>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="mrkt-box new-mrkt-box">
               <h2><a href="#">Square 2.125" X 2.125</a></h2>
               <img src="{{ url('') }}/web/images/size-3.png" class="" alt="Slider  ">
               <p>
                  Your business breaks the mold why shouldn’t
                  your cards reflect that. Make a
                  statement with unique square cards.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="prnt-mrkt">
   <div class="container">
      <h1>PAPER TYPE</h1>
      <div class="row">
         <div class="col-md-4 col-sm-4 col-12">
            <div class="mrkt-box new-mrkt-box">
               <h2><a href="#">14pt or 16pt Coated Cover</a></h2>
               <img src="{{ url('') }}/web/images/paper-1.png" class="" alt="Slider  ">
               <p>Thick and even thicker, smooth,
                  low gloss finish business card stock,
                  perfect for cards with lots of color.
               </p>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="mrkt-box new-mrkt-box">
               <h2><a href="#">16pt Uncoated Cover</a></h2>
               <img src="{{ url('') }}/web/images/paper-2.png" class="" alt="Slider  ">
               <p>
                  Our super thick 16pt uncoated cover has a
                  bright white smooth uncoated paper finish,
                  perfect for elegant cards with minimal graphics.
               </p>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="mrkt-box new-mrkt-box">
               <h2><a href="#">Posters </a></h2>
               <img src="{{ url('') }}/web/images/paper-3.png" class="" alt="Slider  ">
               <p>
                  Our high quality brochures are available in 3 (tri-fold) or 4 (half & half) panel versions,
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Services section -->
<section id="what-we-do">
   <div class="container">
      <h1>WHY CHOOSE RUSH PRINT NYC</h1>
      <div class="row mt-5">
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
               <div class="card-block block-1">
                  <h3 class="card-title">Quality <span class="upldse"><img src="{{ url('') }}/web/images/nyc-1.png" class="" alt="cro"></span></h3>
                  <p class="card-text">We understand your image is on the line with every job we print. A 
                     responsibility we take seriously and is why we have an intensive
                     triple check quality compliance process that each job must pass.
                  </p>
                  <ul>
                     <li>- All art is reviewed prior to printing.</li>
                     <li>- Each job is run by itself to ensure that best color possible.</li>
                     <li>- Each job is inspected prior to shipping after finishing.</li>
                     <li>- We get your job right the first time, every time.</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
               <div class="card-block block-2">
                  <h3 class="card-title">Reliable <span class="upldse"><img src="{{ url('') }}/web/images/nyc-2.png" class="" alt="cro"></span></h3>
                  <p class="card-text">We didn't become one of New York's most popular printers by
                     accident. It took twenty years of getting it done, when other said it
                     couldn't be done. Being there for our clients when they needed
                     us most. We know there are lot of options out there, we enjoy
                     being the one that comes through when you need us most.
                  </p>
                  <ul>
                     <li>- State of art equipment.</li>
                     <li>- 20 years experience.</li>
                     <li>- Working to make you look better.</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
               <div class="card-block block-3">
                  <h3 class="card-title">Speed<span class="upldse"><img src="{{ url('') }}/web/images/nyc-3.png" class="" alt="cro"></span></h3>
                  <p class="card-text">Time is money and everyday you wait, is an opportunity missed.
                     We start working on your job as soon as your order is placed.
                     Our production times are consistently among the industry best.
                  </p>
                  <ul>
                     <li>- All work is done on state of the art equipment.</li>
                     <li>- Computer controlled cutting and finishing.</li>
                     <li>- When you need it now you need us.</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
               <div class="card-block block-4">
                  <h3 class="card-title">Pre-designed Templates <span class="upldse"><img src="{{ url('') }}/web/images/nyc-4.png" class="" alt="cro"></span></h3>
                  <p class="card-text">We take pride in bringing you contemporary design templates that
                     successful businesses actually use to represent their brand. You don’t
                     always have time or money to hire a graphic artist. Don’t let that stop
                     you from communicating with your clients.
                  </p>
                  <ul>
                     <li>- Great for inspiration when designing.</li>
                     <li>- Easy to customize with our design studio in minutes.</li>
                     <li>- Save time and begin the conversation today.</li>
                  </ul>
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
            
            <a href="javascript:void(0)" class="btn btn-success float-right" id="upload-design-btn">Done Uploading</a>
         </div>
      </div>
   </div>
</div>
{{-- Model end --}}
@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script type="text/javascript">
   Dropzone.options.dropzone = {
       maxFilesize: 12,
       renameFile: function(file) {
           var dt = new Date();
           var time = dt.getTime();
          return time+file.name;
       },
       acceptedFiles: ".jpeg,.jpg,.png,.gif",
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
      var attribute_id = $(this).attr('data-attributeid');

      var value_id = $(this).val();

      $.ajax({url: "{{ url('get-product-price') }}/"+attribute_id+'/'+value_id, success: function(result){
         console.log(result);
         var oldPrice = $('span.product-price-value').text();
         var newPrice = parseInt(oldPrice)+parseInt(result);
         $('span.product-price-value').text(newPrice.toFixed(2));
      }});
   })

</script>
@endpush