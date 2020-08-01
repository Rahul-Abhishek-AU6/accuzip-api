@extends('layouts.common')


@push('meta')
<title>Rusprintnyc</title>

<meta name="description" content="">

<meta name="keywords" content="">
@endpush

@push('style')

@endpush

@section('content')
<section class=" sldr">
   <img src="{{ url('') }}/web/images/cont-banner.png" class="" alt="Slider  ">
   <div class="marketing-maters">
      <h2>Contact Us</h2>
      {{-- <ul class="m-m">
         <span><a href="#">Home / </a></span>
         <span><a href="#"> Contact Us </a></span>
      </ul> --}}
   </div>
</section>
<section class="count-al">
   <div class="container">
      <div class="row">
         <p>We are here to answer any questions you may have about RushPrintNYC, printed stuff, or life in general! We would love to hear from you if you have any questions, concerns, suggestions or if you just want to say “Hi”!</p>
         <p>If you want to pass us a note, send it to: 75 Sealey Avenue / Hempstead, NY 11550
            Or give us a ring @ 516-292-1506
         </p>
         <h3>Got something on your mind? What’s up?</h3>
      </div>
   </div>
</section>
<section class="cnt-today">
   <div class="container">
      <h2>CONTACT US TODAY! 516-292-1506</h2>
      <p>Or send us the details below and we will reach out to you with 2 hours During business hours</p>
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-10 col-sm-10 col-12 ">
         	{!! Form::open(['route'=>'contact.save']) !!}
            <div class="row">            
               <div class="col-md-10 claswd">
                  <div class="row">
                     <div class="col-md-6">
                     	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                     	    {!! Form::label('name', 'Name') !!}
                     	    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                     	    <small class="text-danger">{{ $errors->first('name') }}</small>
                     	</div>
                        
                     </div>
                     <div class="col-md-6">
                     	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     	    {!! Form::label('email', 'Email') !!}
                     	    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email']) !!}
                     	    <small class="text-danger">{{ $errors->first('email') }}</small>
                     	</div>
                        
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                     	<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                     	    {!! Form::label('phone', 'Phone Number') !!}
                     	    {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                     	    <small class="text-danger">{{ $errors->first('phone') }}</small>
                     	</div>
                        
                     </div>
                     <div class="col-md-6">
                     	<div class="form-group{{ $errors->has('order_no') ? ' has-error' : '' }}">
                     	    {!! Form::label('order_no', 'Order Number *') !!}
                     	    {!! Form::text('order_no', null, ['class' => 'form-control', 'required' => 'required']) !!}
                     	    <small class="text-danger">{{ $errors->first('order_no') }}</small>
                     	</div>
                        
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                     	<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                     	    {!! Form::label('message', 'Preferred Method Of Contact') !!}
                     	    {!! Form::textarea('message', null, ['class' => 'form-control', 'required' => 'required']) !!}
                     	    <small class="text-danger">{{ $errors->first('message') }}</small>
                     	</div>
                        
                     </div>
                  </div>
                  <div class="row">
                  	<div class="col-md-12">
                  		{!! Form::submit('Submit New!', ['class'=>'btn btn-success']) !!}
                  	</div>
                  </div>
               </div>

               {{-- <span class="new-sdh"><a href="#" class="get-start ">Submit Now!</a></span>  --}}
            </div>
            {!! Form::close() !!}
         </div>
         <div class="col-md-1"></div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="contact-box">
               <ul class="list-inline">
                  <li>
                     <div class="contact">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h3>Address</h3>
                        <p>  75 Sealey Avenue / Hempstead, NY 11550 </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-md-4">
            <div class="contact-box">
               <ul class="list-inline">
                  <li>
                     <div class="contact">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <h3>CALL US TODAY!</h3>
                        <p> 516-292-1506</p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-md-4">
            <div class="contact-box">
               <li>
                  <ul class="list-inline">
                     <div class="contact">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h3>Email:</h3>
                        <p>  info@rushprintnyc.com</p>
                     </div>
                  </ul>
               </li>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.118381809329!2d-73.63464318477803!3d40.715410379331495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c27d3d3cc8301d%3A0x5b1ccdf43dd84946!2s75%20Sealey%20Ave%2C%20Hempstead%2C%20NY%2011550%2C%20USA!5e0!3m2!1sen!2sin!4v1585143212667!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
@endsection

@push('script')

@endpush