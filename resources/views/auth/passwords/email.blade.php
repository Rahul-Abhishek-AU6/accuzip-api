@extends('layouts.common')

@push('style')

@endpush

@section('content')
<section>
   <div class="container login-container">
      <div class="row">
         <div class="col-md-6 login-form-1">
            <h3>SEND PASSWORD RESET LINK</h3>
            {!! Form::open(['route'=>'password.email']) !!}
            	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            	    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email *']) !!}
            	    <small class="text-danger" style="text-align: left; display: block;">{{ $errors->first('email') }}</small>
            	</div>            
	            
	            <div class="form-group">
	               <input type="submit" class="btnSubmit" style="width: 50%" value="Send Password Reset Link" />
	            </div>
            {!! Form::close() !!}
            
         </div>
      </div>
   </div>
</section>
@endsection

@push('script')

@endpush