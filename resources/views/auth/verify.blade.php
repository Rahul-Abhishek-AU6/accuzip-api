@extends('layouts.common')

@section('content')
<section>
   <div class="container login-container">
      <div class="row">
         <div class="col-md-6 login-form-1">
            <p>{{ __('Verify Your Email Address') }}</p>
            
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            <p class="p-0 m-0">Before proceeding, please check your email for a verification link.</p>
            <p class="p-0 m-0">If you did not receive the email</p>
            <br>
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <div>
                    <button type="submit" class="btn btn-info">{{ __('click here to request another') }}</button>
                </div>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection
