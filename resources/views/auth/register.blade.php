@extends('layouts.common')

@push('style')

@endpush

@section('content')
<section>
   <div class="container login-container">
      <div class="row">
         <div class="col-md-6 login-form-1">
            <h3 class="persp-shdjjd">REGISTER HERE</h3>
            {!! Form::open(['route'=>'register']) !!}
            	<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            	    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name *']) !!}
            	    <small class="text-danger" style="text-align: left; display: block;">{{ $errors->first('first_name') }}</small>
            	</div>
	            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
	                {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name *']) !!}
	                <small class="text-danger" style="text-align: left; display: block;">{{ $errors->first('last_name') }}</small>
	            </div>
	            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email *']) !!}
	                <small class="text-danger" style="text-align: left; display: block;">{{ $errors->first('email') }}</small>
	            </div>
	            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
	                <small class="text-danger text-align-left" style="text-align: left; display: block;">{{ $errors->first('password') }}</small>
	            </div>
	            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
	                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password *']) !!}
	            </div>
	            
	            <div class="hs-lsfrd">
	               <span class="fefwghhhbdfbdh"><input type="checkbox" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" class="checkbox"></span>
	               <span class="dddeewevv"><label for="is_subscribed">Sign Up for Newsletter</label></span>
	            </div>
	            <div class="form-group">
	               <input type="submit" class="btnSubmit" value="Sign Up" />
	            </div>
            {!! Form::close() !!}
            <div class="form-group">
               <a href="{{ route('login') }}" class="btnForgetPwd">Already have an account? Login here.</a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('script')

@endpush