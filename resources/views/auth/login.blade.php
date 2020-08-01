@extends('layouts.common')

@push('style')

@endpush

@section('content')
<section>
   <div class="container login-container">
      <div class="row">
         <div class="col-md-6 login-form-1">
            @if(Session::get('_previous')['url'] == url('').'/how-we-work-eddm-address-own-list' || Session::get('_previous')['url'] == url('').'/how-we-work-eddm-address')
            <p class="mb-md-2 font-italic"><small>To save your list and continue, please either Login or Register Now, it takes less than a New York Minute and it's Free.</small> </p>
            @endif
            <h3 class="text-uppercase">Login Here</h3>
            {!! Form::open(['route'=>'login']) !!}
            	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="">Email address   <span style="color:red">*</span></label>
            	    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email *']) !!}
            	    <small class="text-danger" style="text-align: left; display: block;">{{ $errors->first('email') }}</small>
            	</div>
	            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
               <label for="">Password  <span style="color:red">*</span></label>
	                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Your password *']) !!}
	                <small class="text-danger" style="text-align: left; display: block;">{{ $errors->first('password') }}</small>
	            </div>
	            
	            <div class="form-group mb-0">

                  <input type="submit" class="btnSubmit w-100 mb-0" style="width:100% !important;" value="Login" /> .
                  <a href="{{ route('password.request') }}" class="btnForgetPwd mb-3">Forgot Password?</a>
                  
	            </div>
            {!! Form::close() !!}
            <div class="form-group ">
               <p class="form__para">Not a member? <a href="{{ route('register') }}" class="ml-3">Register now</a></p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('script')

@endpush