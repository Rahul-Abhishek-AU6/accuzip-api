@extends('layouts.common')

@push('style')

@endpush

@section('content')
<section class="blo-ad">
   <div class="container">
      <div class="fliasjhdc">
      </div>
      <div class="row">
         @include('components.user-menu')
         <div class="col-md-9 col-sm-12 col-12">
            <div class="dash-board-bxc">
               <h3>My Dashboard</h3>
               <h4>Hello, {{ Auth::user()->name }}!</h4>
               <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
               <h5>Account Information</h5>
               <div class="row">
                  <div class="col-md-6 col-sm-12 col-12">
                     <div class="acoub-info-acnt">
                        <h4>Contact Information <span class="spab-sed-ed"><a href="#"  data-toggle="modal" data-target="#editUserInfo">Edit</a></span></h4>
                            <!-- Modal -->
                           <div class="modal fade  bd-example-modal-md" id="editUserInfo" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                    <div class="modal-header  align-items-center">
                                        <h6 class="modal-title" id="loginModalLabel">Contact Information </h6>
                                    </div>
                                    <div class="modal-body">
                                       {!! Form::open(['route'=>'web.user.update']) !!}
                                          <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                              {!! Form::label('first_name', 'First Name') !!}
                                              {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'First Name']) !!}
                                              <small class="text-danger">{{ $errors->first('first_name') }}</small>

                                          </div>
                                          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                              {!! Form::label('last_name', 'Last Name') !!}
                                              {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Last Name']) !!}
                                              <small class="text-danger">{{ $errors->first('last_name') }}</small>
                                          </div>
                                          
                                          
                                          <div class="text-center">
                                          <input type="submit" class="btn btn-primary" value="Save">
                                           </div>
                                       {!! Form::close() !!}
                                    </div>

                                </div>
                            </div>
                        </div>

                        <ul>
                           <li>{{ Auth::user()->name }}</li>
                           <li>{{ Auth::user()->email }}</li>
                           <li><a href="#"  data-toggle="modal" data-target="#change_password">Change Password</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-12">
                     <div class="acoub-info-acnt">
                        <h4>Newsletters <span class="spab-sed-ed"><a href="#0">Edit</a></span></h4>
                        @if(App\NewsLetter::where('email',Auth::user()->email)->count())
                            <p>You have subscribed newsletter.</p>
                        @else
                            <p>You are currently not subscribed to any newsletter.</p>
                        @endif
                        
                     </div>
                  </div>
               </div>
               <h5 class="mx-zko-ps">Address Book</h5>
               <div class="row">
                  <div class="col-md-6 col-sm-12 col-12">
                    @php
                        $billing = App\BillingAddress::where(['user_id'=>Auth::user()->id,'is_default'=>'1'])->first();
                    @endphp
                     <div class="acoub-info-acnt">
                        
                        <h4>DEFAULT BILLING ADDRESS </h4>
                        @if($billing)
                        <p><b>Name:</b> {{ $billing->name }}</p>
                        <p><b>Company:</b> {{ $billing->company }}</p>
                        <p><b>Email:</b> {{ $billing->email }}</p>
                        <p><b>Address:</b> {{ $billing->address }}</p>
                        <p><b>City:</b> {{ $billing->city }}</p>
                        <p><b>state:</b> {{ $billing->state }}</p>
                        <p><b>Country:</b> {{ $billing->country }}</p>
                        <p><b>Zip:</b> {{ $billing->zip }}</p>
                        @else
                        <p>You have not set a address!</p>
                        @endif
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-12">
                    @php
                        $shipping = App\ShippingAddress::where(['user_id'=>Auth::user()->id,'is_default'=>'1'])->first();
                    @endphp
                     <div class="acoub-info-acnt">
                        <h4>DEFAULT SHIPPING ADDRESS </h4>
                        @if($shipping)
                        <p><b>Name:</b> {{ $shipping->name }}</p>
                        <p><b>Company:</b> {{ $shipping->company }}</p>
                        <p><b>Email:</b> {{ $shipping->email }}</p>
                        <p><b>Address:</b> {{ $shipping->address }}</p>
                        <p><b>City:</b> {{ $shipping->city }}</p>
                        <p><b>state:</b> {{ $shipping->state }}</p>
                        <p><b>Country:</b> {{ $shipping->country }}</p>
                        <p><b>Zip:</b> {{ $shipping->zip }}</p>
                        @else
                        <p>You have not set a address!</p>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

{{-- Change password popup begain --}}
<div class="modal fade bd-example-modal-md" id="change_password" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            <div class="modal-header  align-items-center">
                <h6 class="modal-title" id="loginModalLabel">Contact Information </h6>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'web.user.password.update']) !!}
                    <div class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
                         {!! Form::label('old_password', 'Old Password') !!}
                         {!! Form::password('old_password', ['class' => 'form-control', 'required' => 'required','placeholder'=>'Old Password']) !!}
                         <small class="text-danger">{{ $errors->first('old_password') }}</small>
                    </div> 
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password', 'New Password') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required','placeholder'=>'New Password']) !!}
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        {!! Form::label('password_confirmation', 'Confirm Password') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required','placeholder'=>'Password Confirmation']) !!}
                        <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                    </div>
                    <div class="text-center">
                      <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>
{{-- change password popup end --}}
@endsection

@push('script')

@endpush