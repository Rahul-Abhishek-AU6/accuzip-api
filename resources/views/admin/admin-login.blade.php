@extends('admin.layout.login-css')
@section('content') 
<body class="login-page" cz-shortcut-listen="true" style="min-height: 512.391px;">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>Rushprintnyc</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login for admin </p>
      {!! Form::open(['route'=>'admin.login']) !!}   
        <div class="input-group mb-3">
          @if(Session::has('message'))
            <span class="text-danger" style="width: 100%">{{ Session::get('message') }}</span>
          @endif
          <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @if ($errors->has('email'))
            <span class="text-danger" style="width: 100%">{{ $errors->first('email') }}</span>
          @endif
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
           @if ($errors->has('password'))
              <span class="text-danger" style="width: 100%">{{ $errors->first('password') }}</span>
          @endif 
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      {!! Form::close() !!}

     
    </div>
  </div>
</div>





</body>
 @endsection