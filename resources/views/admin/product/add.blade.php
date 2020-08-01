@extends('admin.layout.common')
@push('style')
<link rel="stylesheet" href="{{ url('/') }}/admin-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ url('/') }}/admin-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush


@section('content') 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Product</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">

                <a class="nav-item nav-link {{ ((Request::input('target')=='general' || !Request::input('target'))?'active':'') }}" id="product-general-tab" href="{{ route('admin.product.create','target=general&id='.Request::input('id')) }}">General</a>

                <a class="nav-item nav-link {{ ((Request::input('target')=='price')?'active':'') }}" id="product-price-tab" href="{{ route('admin.product.create','target=price&id='.Request::input('id')) }}">Price</a>

                <a class="nav-item nav-link {{ ((Request::input('target')=='meta')?'active':'') }}" id="product-meta-tab" href="{{ route('admin.product.create','target=meta&id='.Request::input('id')) }}">Meta information</a>

                <a class="nav-item nav-link {{ ((Request::input('target')=='image')?'active':'') }}" id="product-image-tab" href="{{ route('admin.product.create','target=image&id='.Request::input('id')) }}">Image</a>

                <a class="nav-item nav-link {{ ((Request::input('target')=='custom')?'active':'') }}" id="product-custom-tab" href="{{ route('admin.product.create','target=custom&id='.Request::input('id')) }}">Custom Option</a>

                <a class="nav-item nav-link {{ ((Request::input('target')=='extra')?'active':'') }}" id="product-extra-tab" href="{{ route('admin.product.create','target=extra&id='.Request::input('id')) }}">Other</a>


              </div>
            </nav>
            @php
              if (Request::input('id')) {
                $product = \App\Product::find(Request::input('id'));

              }
            @endphp
            <div class="tab-content p-3 w-100" id="nav-tabContent">
              <div class="tab-pane fade {{ ((Request::input('target')=='general' || !Request::input('target'))?'active show':'') }}" id="product-general" role="tabpanel" aria-labelledby="product-general-tab">
                @if(Request::input('id'))
                  {!! Form::open(['route'=>['admin.product.store','id='.Request::input('id')]]) !!}
                @else
                  {!! Form::open(['route'=>['admin.product.store']]) !!}
                @endif
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      {!! Form::label('name', 'Name') !!}
                      {!! Form::text('name', $product->name??null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('name') }}</small>
                  </div>
                  <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                      {!! Form::label('desc', 'Description') !!}
                      {!! Form::textarea('desc', $product->descrption??null, ['class' => 'form-control compose-textarea', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('desc') }}</small>
                  </div>
                  
                  
                  <div class="form-group{{ $errors->has('sku') ? ' has-error' : '' }}">
                      {!! Form::label('sku', 'SKU') !!}
                      {!! Form::text('sku', $product->sku??null, ['class' => 'form-control', 'placeholder' => 'SKU']) !!}
                      <small class="text-danger">{{ $errors->first('sku') }}</small>
                  </div>
                  
                  <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                      {!! Form::label('status', 'Status') !!}
                      {!! Form::select('status', ['Disable','Enable'],$product->status??1 , ['id' => 'status', 'class' => 'form-control', 'placeholder' => '---Select One---']) !!}
                      <small class="text-danger">{{ $errors->first('status') }}</small>
                  </div>
                  
                  <button class="btn btn-info btn-sm pull-right">SAVE & NEXT</button>
                {!! Form::close() !!}
              </div>
              <div class="tab-pane fade {{ ((Request::input('target')=='price')?'active show':'') }}" id="product-price" role="tabpanel" aria-labelledby="product-price-tab"> 
                {!! Form::open(['route'=>['admin.product.store','target=price&id='.Request::input('id')]]) !!}
                <div class="form-group{{ $errors->has('mrp') ? ' has-error' : '' }}">
                    {!! Form::label('mrp', 'MRP') !!}
                    {!! Form::text('mrp', $product->mrp??null, ['class' => 'form-control', 'placeholder' => 'MRP']) !!}
                    <small class="text-danger">{{ $errors->first('mrp') }}</small>
                </div>
                <div class="form-group{{ $errors->has('special_price') ? ' has-error' : '' }}">
                    {!! Form::label('special_price', 'Special Price') !!}
                    {!! Form::text('special_price', $product->special_price??null, ['class' => 'form-control', 'placeholder' => 'Special Price']) !!}
                    <small class="text-danger">{{ $errors->first('special_price') }}</small>
                </div>
                <div class="form-group{{ $errors->has('msp') ? ' has-error' : '' }}">
                    {!! Form::label('msp', 'Price (MSP)') !!}
                    {!! Form::text('msp', $product->msp??null, ['class' => 'form-control', 'placeholder' => 'MSP']) !!}
                    <small class="text-danger">{{ $errors->first('msp') }}</small>
                </div>
                
                <button class="btn btn-info btn-sm pull-right">SAVE & NEXT</button>
                {!! Form::close() !!}
              </div>
              <div class="tab-pane fade {{ ((Request::input('target')=='meta')?'active show':'') }}" id="product-meta" role="tabpanel" aria-labelledby="product-meta-tab">
                {!! Form::open(['route'=>['admin.product.store','target=meta&id='.Request::input('id')]]) !!}
                <div class="form-group{{ $errors->has('meta_title') ? ' has-error' : '' }}">
                    {!! Form::label('meta_title', 'Meta Title') !!}
                    {!! Form::text('meta_title', $product->meta_title??null, ['class' => 'form-control', 'placeholder' => 'Meta Title']) !!}
                    <small class="text-danger">{{ $errors->first('meta_title') }}</small>
                </div>
                <div class="form-group{{ $errors->has('meta_keyword') ? ' has-error' : '' }}">
                    {!! Form::label('meta_keyword', 'Meta Keyword') !!}
                    {!! Form::textarea('meta_keyword', $product->meta_key??null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('meta_keyword') }}</small>
                </div>
                <div class="form-group{{ $errors->has('meta_descrption') ? ' has-error' : '' }}">
                    {!! Form::label('meta_descrption', 'Meta Description') !!}
                    {!! Form::textarea('meta_descrption', $product->meta_descrption??null, ['class' => 'form-control', 'placeholder' => 'Meta Description']) !!}
                    <small class="text-danger">{{ $errors->first('meta_descrption') }}</small>
                </div>               
                
                <button class="btn btn-info btn-sm pull-right">SAVE & NEXT</button>
                {!! Form::close() !!}
              </div>
              <div class="tab-pane fade {{ ((Request::input('target')=='image')?'active show':'') }}" id="product-image" role="tabpanel" aria-labelledby="product-image-tab">
                <form method="post" action="{{ route('admin.product.store','target=custom&id='.Request::input('id')) }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                  @csrf
                </form>
                @if(Request::input('id') && \App\ProductImage::where('product_id',Request::input('id'))->count())
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td>Image</td>
                      <td>Order</td>
                      <td>Action</td>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse(\App\ProductImage::where('product_id',Request::input('id'))->get() as $im)
                    <tr>
                      <td><img src="{{ url('storage/'.$im->image) }}" width="80" height="80"></td>
                      <td>N/A</td>
                      <td><a href="{{ route('admin.product-image.destroy',$im->id) }}">Delete</a></td>
                    </tr>
                    @empty
                    @endforelse
                  </tbody>
                </table>
                @endif
                <br>
                <a href="{{ route('admin.product.create','target=custom&id='.Request::input('id')) }}" class="btn btn-info btn-sm pull-right">SAVE & NEXT</a>
              </div>
              <div class="tab-pane fade {{ ((Request::input('target')=='custom')?'active show':'') }}" id="product-custom" role="tabpanel" aria-labelledby="product-custom-tab">
                @php

                  $patt = App\ProductAttribute::where('product_id',Request::input('id'))->get();
                @endphp
                {!! Form::open(['route'=>['admin.product.store','target=finish&id='.Request::input('id')]]) !!}
                <div class="card">
                  <div class="card-title bg-primary">
                    <p style="padding: 10px;padding-bottom: 0px;">Custom Option <span style="float: right;"><a href="javascript:void(0)" class="btn btn-sm btn-success" id="add-attribute">Add Option</a></span></p>                    
                  </div>
                  <div class="card-body" id="custom-attribute-set">
                    <div class="custom-option">
                      @foreach($patt as $vs)
                        <div style="border: 1px solid #999; padding: 10px; margin: 5px 0 5px 0" class="main-custom-all">
                           <div class="row">
                              
                              <div class="col-md-6 form-group{{ $errors->has('attribute') ? ' has-error' : '' }}">
                                {!! Form::label('attribute', 'Attribute') !!}
                                {!! Form::select('attribute[]', App\Attribute::where('status','ACTIVE')->get()->pluck('name','id'), $vs->attribute_id, ['id' => 'attribute', 'class' => 'form-control']) !!}
                              </div>
                              <div class="col-md-6 form-group{{ $errors->has('type[]') ? ' has-error' : '' }}">
                                  <div style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                                    {!! Form::label('type[]', 'Type') !!}
                                    <span class="btn btn-xs btn-danger close-attribute"><i class="fa fa-times" aria-hidden="true"></i></span>
                                  </div>                                
                                  {!! Form::select('type[]', ['select'=>'select','file'=>'file','text'=>'text'], $vs->type, ['class' => 'form-control', 'required' => 'required',]) !!}
                                  <small class="text-danger">{{ $errors->first('type[]') }}</small>
                              </div>                           
                           </div>
                           <div class="attrivute-value-load">
                              <div class="add-here">
                                @php
                                  $proAttVal = App\ProductAttributeValue::where(['product_attributes_id'=>$vs->id])->get();
                                @endphp
                                @forelse($proAttVal as $pv)
                                @php
                                  $attribute_id = App\ProductAttribute::find($pv->product_attributes_id);
                                  $attrdata = App\Attribute::find($attribute_id->attribute_id);
                                  // dd($attrdata);
                                  $atname = strtolower(str_replace(' ', '_', $attrdata->name));
                                @endphp
                                 <div class="sub-division-div">
                                    <hr>
                                    <div class="row">
                                      <div class="col-md-4 form-group{{ $errors->has('_value[]') ? ' has-error' : '' }}">
                                          {!! Form::label('_value', ucfirst($atname).' Value') !!}
                                          {!! Form::select($atname.'_value[]', App\AttributeValue::where('attribute_id',$attrdata->id)->get()->pluck('value','id'), $pv->attribute_value_id, ['id' => '_value[]', 'class' => 'form-control', 'required' => 'required']) !!}
                                      </div>
                                      <div class="col-md-4 form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                          {!! Form::label('price', 'Price') !!}
                                          
                                          {!! Form::text(strtolower($atname).'price[]', $pv->price, ['class' => 'form-control',]) !!}
                                          <small class="text-danger">{{ $errors->first('price') }}</small>
                                      </div>
                                      <div class="col-md-4 form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                          {!! Form::label('Weight', 'Weight') !!}
                                          <span class="btn btn-xs btn-danger close-clienl-attribute float-right" style="align-items: center;"><i class="fa fa-times" aria-hidden="true"></i></span>
                                          {!! Form::text(strtolower($atname).'weight[]', $pv->weight, ['class' => 'form-control',]) !!}
                                          <small class="text-danger">{{ $errors->first('price') }}</small>
                                      </div>                                       
                                    </div>
                                 </div>
                                @empty

                                @endforelse
                              </div>
                              <a href="javascript:void(0)" class="btn btn-sm btn-success float-right attrivute-value-load-btn" data-attrib="{{ $vs->attribute_id }}">Add new row</a>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                      @endforeach
                    </div>
                    <button id="finish-btn" class="btn btn-info btn-sm float-right" @if(!$patt->count())style="display: none;" @endif>SAVE & NEXT</button>
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
              {{-- extra fields option here begain --}}
              @php
                $prct = App\ProductContent::where('product_id',Request::input('id'))->get();
                // dd($prct);
              @endphp
              <div class="tab-pane fade {{ ((Request::input('target')=='extra')?'active show':'') }}" id="product-extra" role="tabpanel" aria-labelledby="product-extra-tab">
                
                {!! Form::open(['route'=>['admin.product.store.extra','target=extra&id='.Request::input('id')],'files'=>true]) !!}
                <div class="card">
                  <div class="card-title bg-primary">
                    <p style="padding: 10px;padding-bottom: 0px;">CHOOSE YOUR SIZE</p>                   
                  </div>
                  <div class="card-body" id="custom-attribute-set">
                      
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('image1title') ? ' has-error' : '' }}">
                              {!! Form::label('image1title', 'Title') !!}
                              {!! Form::text('image1title', (($prct->where('key','size1')->first())?$prct->where('key','size1')->first()->title:''), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                              <small class="text-danger">{{ $errors->first('image1title') }}</small>
                          </div>
                          <div class="form-group{{ $errors->has('image1') ? ' has-error' : '' }}">
                              <label class="w-100">Image1</label>
                              {!! Form::file('image1', []) !!}
                              <p class="help-block">JPEG, PNG, JEG only</p>
                              <small class="text-danger">{{ $errors->first('image1') }}</small>
                              @if($prct->where('key','size1')->first())
                              <img src="{{ url('storage/'.$prct->where('key','size1')->first()->image??'') }}" height="100" width="100">
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('image1body') ? ' has-error' : '' }}">
                              {!! Form::label('image1body', 'Body') !!}
                              {!! Form::text('image1body', (($prct->where('key','size1')->first())?$prct->where('key','size1')->first()->body:''), ['class' => 'form-control', 'placeholder' => 'Body']) !!}
                              <small class="text-danger">{{ $errors->first('image1body') }}</small>
                          </div>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('image2title') ? ' has-error' : '' }}">
                              {!! Form::label('image2title', 'Title') !!}
                              {!! Form::text('image2title', (($prct->where('key','size2')->first())?$prct->where('key','size2')->first()->title:''), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                              <small class="text-danger">{{ $errors->first('image2title') }}</small>
                          </div>
                          <div class="form-group{{ $errors->has('image2') ? ' has-error' : '' }}">
                              <label class="w-100">Image2</label>
                              {!! Form::file('image2', []) !!}
                              <p class="help-block">JPEG, PNG, JEG only</p>
                              <small class="text-danger">{{ $errors->first('image2') }}</small>
                              @if($prct->where('key','size2')->first())
                              <img src="{{ url('storage/'.$prct->where('key','size2')->first()->image??'') }}" height="100" width="100">
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('image2body') ? ' has-error' : '' }}">
                              {!! Form::label('image2body', 'Body') !!}
                              {!! Form::text('image2body', (($prct->where('key','size2')->first())?$prct->where('key','size2')->first()->body:''), ['class' => 'form-control', 'placeholder' => 'Body']) !!}
                              <small class="text-danger">{{ $errors->first('image2body') }}</small>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('image3title') ? ' has-error' : '' }}">
                              {!! Form::label('image3title', 'Title') !!}
                              {!! Form::text('image3title', (($prct->where('key','size3')->first())?$prct->where('key','size3')->first()->title:''), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                              <small class="text-danger">{{ $errors->first('image3title') }}</small>
                          </div>
                          <div class="form-group{{ $errors->has('image3') ? ' has-error' : '' }}">
                              <label class="w-100">Image3</label>
                              {!! Form::file('image3', []) !!}
                              <p class="help-block">JPEG, PNG, JEG only</p>
                              <small class="text-danger">{{ $errors->first('image3') }}</small>
                              @if($prct->where('key','size3')->first())
                              <img src="{{ url('storage/'.$prct->where('key','size3')->first()->image??'') }}" height="100" width="100">
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('image3body') ? ' has-error' : '' }}">
                              {!! Form::label('image3body', 'Body') !!}
                              {!! Form::text('image3body', (($prct->where('key','size3')->first())?$prct->where('key','size3')->first()->body:''), ['class' => 'form-control', 'placeholder' => 'Body']) !!}
                              <small class="text-danger">{{ $errors->first('image3body') }}</small>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="card-title bg-primary">
                    <p style="padding: 10px;padding-bottom: 0px;">PAPER TYPE</p>
                  </div>
                  <div class="card-body" id="custom-attribute-set">
                    
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('ptimage1title') ? ' has-error' : '' }}">
                              {!! Form::label('ptimage1title', 'Title') !!}
                              {!! Form::text('ptimage1title', (($prct->where('key','ptimage1')->first())?$prct->where('key','ptimage1')->first()->title:''), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                              <small class="text-danger">{{ $errors->first('ptimage1title') }}</small>
                          </div>
                          <div class="form-group{{ $errors->has('ptimage1') ? ' has-error' : '' }}">
                              <label class="w-100">Image1</label>
                              {!! Form::file('ptimage1', []) !!}
                              <p class="help-block">JPEG, PNG, JEG only</p>
                              <small class="text-danger">{{ $errors->first('ptimage1') }}</small>
                              @if($prct->where('key','ptimage1')->first())
                              <img src="{{ url('storage/'.$prct->where('key','ptimage1')->first()->image??'') }}" height="100" width="100">
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('ptimage1body') ? ' has-error' : '' }}">
                              {!! Form::label('ptimage1body', 'Body') !!}
                              {!! Form::text('ptimage1body', (($prct->where('key','ptimage1')->first())?$prct->where('key','ptimage1')->first()->body:''), ['class' => 'form-control', 'placeholder' => 'Body']) !!}
                              <small class="text-danger">{{ $errors->first('ptimage1body') }}</small>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('ptimage2title') ? ' has-error' : '' }}">
                              {!! Form::label('ptimage2title', 'Title') !!}
                              {!! Form::text('ptimage2title', (($prct->where('key','ptimage2')->first())?$prct->where('key','ptimage2')->first()->title:''), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                              <small class="text-danger">{{ $errors->first('ptimage2title') }}</small>
                          </div>
                          <div class="form-group{{ $errors->has('ptimage2') ? ' has-error' : '' }}">
                              <label class="w-100">Image2</label>
                              {!! Form::file('ptimage2', []) !!}
                              <p class="help-block">JPEG, PNG, JEG only</p>
                              <small class="text-danger">{{ $errors->first('ptimage2') }}</small>
                              @if($prct->where('key','ptimage2')->first())
                              <img src="{{ url('storage/'.$prct->where('key','ptimage2')->first()->image??'') }}" height="100" width="100">
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('ptimage2body') ? ' has-error' : '' }}">
                              {!! Form::label('ptimage2body', 'Body') !!}
                              {!! Form::text('ptimage2body', (($prct->where('key','ptimage2')->first())?$prct->where('key','ptimage2')->first()->body:''), ['class' => 'form-control', 'placeholder' => 'Body']) !!}
                              <small class="text-danger">{{ $errors->first('ptimage2body') }}</small>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('ptimage3title') ? ' has-error' : '' }}">
                              {!! Form::label('ptimage3title', 'Title') !!}
                              {!! Form::text('ptimage3title', (($prct->where('key','ptimage3')->first())?$prct->where('key','ptimage3')->first()->title:''), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                              <small class="text-danger">{{ $errors->first('ptimage3title') }}</small>
                          </div>
                          <div class="form-group{{ $errors->has('ptimage3') ? ' has-error' : '' }}">
                              <label class="w-100">Image3</label>
                              {!! Form::file('ptimage3', []) !!}
                              <p class="help-block">JPEG, PNG, JEG only</p>
                              <small class="text-danger">{{ $errors->first('ptimage3') }}</small>
                              @if($prct->where('key','ptimage3')->first())
                              <img src="{{ url('storage/'.$prct->where('key','ptimage3')->first()->image??'') }}" height="100" width="100">
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('ptimage3body') ? ' has-error' : '' }}">
                              {!! Form::label('ptimage3body', 'Body') !!}
                              {!! Form::text('ptimage3body', (($prct->where('key','ptimage3')->first())?$prct->where('key','ptimage3')->first()->body:''), ['class' => 'form-control', 'placeholder' => 'Body']) !!}
                              <small class="text-danger">{{ $errors->first('ptimage3body') }}</small>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('ptimage4title') ? ' has-error' : '' }}">
                              {!! Form::label('ptimage4title', 'Title') !!}
                              {!! Form::text('ptimage4title', (($prct->where('key','ptimage4')->first())?$prct->where('key','ptimage4')->first()->title:''), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                              <small class="text-danger">{{ $errors->first('ptimage4title') }}</small>
                          </div>
                          <div class="form-group{{ $errors->has('ptimage4') ? ' has-error' : '' }}">
                              <label class="w-100">Image4</label>
                              {!! Form::file('ptimage4', []) !!}
                              <p class="help-block">JPEG, PNG, JEG only</p>
                              <small class="text-danger">{{ $errors->first('ptimage4') }}</small>
                              @if($prct->where('key','ptimage4')->first())
                              <img src="{{ url('storage/'.$prct->where('key','ptimage4')->first()->image??'') }}" height="100" width="100">
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('ptimage4body') ? ' has-error' : '' }}">
                              {!! Form::label('ptimage4body', 'Body') !!}
                              {!! Form::text('ptimage4body', (($prct->where('key','ptimage4')->first())?$prct->where('key','ptimage4')->first()->body:''), ['class' => 'form-control', 'placeholder' => 'Body']) !!}
                              <small class="text-danger">{{ $errors->first('ptimage4body') }}</small>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="card-title bg-primary">
                    <p style="padding: 10px;padding-bottom: 0px;">WHY CHOOSE RUSH PRINT NYC</p>
                  </div>
                  <div class="card-body" id="custom-attribute-set">
                    <div class="form-group{{ $errors->has('quality') ? ' has-error' : '' }}">
                        {!! Form::label('quality', 'Quality') !!}
                        {!! Form::textarea('quality', (($prct->where('key','quality')->first())?$prct->where('key','quality')->first()->body:''), ['class' => 'form-control compose-textarea']) !!}
                        <small class="text-danger">{{ $errors->first('quality') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('reliable') ? ' has-error' : '' }}">
                        {!! Form::label('reliable', 'Reliable') !!}
                        {!! Form::textarea('reliable', (($prct->where('key','reliable')->first())?$prct->where('key','reliable')->first()->body:''), ['class' => 'form-control compose-textarea']) !!}
                        <small class="text-danger">{{ $errors->first('reliable') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('speed') ? ' has-error' : '' }}">
                        {!! Form::label('speed', 'Speed') !!}
                        {!! Form::textarea('speed', (($prct->where('key','speed')->first())?$prct->where('key','speed')->first()->body:''), ['class' => 'form-control compose-textarea']) !!}
                        <small class="text-danger">{{ $errors->first('speed') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('pst') ? ' has-error' : '' }}">
                        {!! Form::label('pst', 'Pre Design Template') !!}
                        {!! Form::textarea('pst', (($prct->where('key','pst')->first())?$prct->where('key','pst')->first()->body:''), ['class' => 'form-control compose-textarea']) !!}
                        <small class="text-danger">{{ $errors->first('pst') }}</small>
                    </div>
                  </div>
                  <div class="col-md-12" style="margin-bottom: 10px; padding-right: 20px;">
                    <button class="btn btn-warning float-right">SAVE & NEXT</button>
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
              {{-- extra fields option here end --}}
            </div>
          </div>
        </div>
    
    </section>  
  </div>

 @endsection 


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>

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


  $('#add-attribute').click(function() {
    $('#finish-btn').css('display','block');

    $.ajax({url: "{{ url('load-attribute') }}", success: function(result){
      $('.custom-option').prepend(result);
    }});    
  })
  
  $('.custom-option').on('change','select[name="attribute[]"]',function() {
    var id = $(this).val();
    $(this).parents('.main-custom-all').find('.attrivute-value-load a').attr('data-attrib',id);

    $(this).parents('.main-custom-all').find('.attrivute-value-load .add-here').html('');
  })

  $('#custom-attribute-set').on('click','.close-attribute', function() {

    $(this).parents('.main-custom-all').remove();
  });

  $('.custom-option').on('click','.attrivute-value-load-btn',function() {
    var self = $(this);
    var attr = $(this).attr('data-attrib');
    // console.log(attr)
    if (!attr) {
      toastr.error('Select Attribute Please!', 'Error!');
      return false;
    }
    $.ajax({url: "{{ url('load-attrbute-value') }}/"+attr, success: function(result){
      self.parent('.attrivute-value-load').find('.add-here').prepend(result);
    }}); 
  });

  $('.custom-option').on('click','.close-clienl-attribute', function() {
    $(this).parents('.sub-division-div').remove();
  });

  $(function () {
    $('.compose-textarea').summernote({
      height:150,
      styleWithSpan: false,
      disableDragAndDrop: true,
      popover: {
        image: [
          ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
          ['float', ['floatLeft', 'floatRight', 'floatNone']],
          ['remove', ['removeMedia']]
        ],
        link: [
          ['link', ['linkDialogShow', 'unlink']]
        ],
        table: [
          ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
          ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
        ],
        air: [
          ['color', ['color']],
          ['font', ['bold', 'underline', 'clear']],
          ['para', ['ul', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture']]
        ]
      },

    })
  })
</script>
@endpush