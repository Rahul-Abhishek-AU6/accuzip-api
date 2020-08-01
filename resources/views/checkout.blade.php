@extends('layouts.common')

@push('style')

@endpush

@section('content')

<section class="assjwu-su-sopps">
   <div class="container">
      <div class="row">
         <div class="col-md-9 col-sm-9 col-12">
            <div id="accordion" class="minea-xc-zgh">
               
               <div class="card">
                  <div class="card-header">
                     <a class="card-link text-white" data-toggle="collapse">
                        <span class="float-right"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        <h6>1 Checkout Method</h6>
                     </a>
                  </div>
                  @guest
                  <div class="collapse show" data-parent="#accordion">
                     <div class="card-body">
                        <div class="row">
		                  <div class="col-md-6 login-form-1 no-login-form">
		                     <h3 class="ssps-asjjsj">{{-- CHECKOUT AS A GUEST OR  --}}REGISTER</h3>
		                     <p>Register with us for future convenience:</p>
		                     {{-- <div class="hs-lsfrd">
		                        <span class="fefwghhhbdfbdh"><input type="radio" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" class="radio"></span>
		                        <span class="dddeewevv"><label for="is_subscribed">Checkout as Guest</label></span>
		                     </div> --}}
		                     {{-- <div class="hs-lsfrd">
		                        <span class="fefwghhhbdfbdh"><input type="radio" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" class="radio"></span>
		                        <span class="dddeewevv"><label for="is_subscribed">Register</label></span>
		                     </div> --}}
		                     <div class="auio-asssasw">
		                        <h4>Register and save time!</h4>
		                        <ul>
		                           <h5>Register with us for future convenience:</h5>
		                           <li>Fast and easy check out</li>
		                           <li>Easy access to your order history and status</li>
		                        </ul>
		                       {{--  <div class="form-group">
		                           <input type="submit" class="btnSubmit" value="Continue" />
		                        </div> --}}
		                     </div>
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
					     
					            <div class="form-group">
		                           <input type="submit" class="btnSubmit" value="Continue" />
		                        </div>
					            
					        {!! Form::close() !!}
		                  </div>
		                  <div class="col-md-6 login-form-1 no-login-form">
		                     <h3 class="ssps-asjjsj">LOGIN</h3>
		                     <p>Already registered? / Please log in below:</p>
		                     {!! Form::open(['route'=>['custom.login','target=billing']]) !!}
		                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		                         {!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'Email']) !!}
		                         <small class="text-danger" style="text-align: left; display: block;">{{ $errors->first('email') }}</small>
		                     </div>
		                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                         {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
		                         <small class="text-danger" style="text-align: left; display: block;">{{ $errors->first('password') }}</small>
		                     </div>
		                    
		                     <div class="form-group">
		                        <a href="{{ route('password.request') }}" class="btnForgetPwd">Forgot your password?</a>
		                     </div>
		                     <div class="form-group">
		                        <input type="submit" class="btnSubmit" value="Login" />
		                     </div>
		                     {!! Form::close() !!}
		                  </div>
		               </div>
                     </div>
                  </div>
                  @endguest
               </div>
               
               <div class="card">
                  <div class="card-header ">
                     <a class="collapsed card-link text-white" data-toggle="collapse">
                        <span class="float-right"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        <h6>2 Billing Information</h6>
                     </a>
                  </div>
                  <div class="collapse @if(Auth::check() == true && Request::input('target') == 'checkout') show @endif" data-parent="#accordion">
                     <div class="card-body">
                        {!! Form::open(['route'=>'web.billing.address']) !!}
			        
				            <div class="row">
				            	<div class="col-md-6 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
					                {!! Form::label('first_name', 'First Name') !!}
					                {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
					                <small class="text-danger">{{ $errors->first('first_name') }}</small>
					            </div>

					            <div class="col-md-6 form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
					                {!! Form::label('last_name', 'Last Name') !!}
					                {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
					                <small class="text-danger">{{ $errors->first('last_name') }}</small>
					            </div>

					            {{-- <div class="col-md-6 form-group{{ $errors->has('company') ? ' has-error' : '' }}">
					                {!! Form::label('company', 'Company') !!}
					                {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Company']) !!}
					                <small class="text-danger">{{ $errors->first('company') }}</small>
					            </div> --}}

					            <div class="col-md-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					                {!! Form::label('email', 'Email') !!}
					                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
					                <small class="text-danger">{{ $errors->first('email') }}</small>
					            </div>
					            
				            </div>
				            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
				                {!! Form::label('address', 'Address') !!}
				                {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Address','rows'=>'7']) !!}
				                <small class="text-danger">{{ $errors->first('address') }}</small>
				            </div>

				            <div class="row">
				            	 <div class="col-md-6 form-group{{ $errors->has('city') ? ' has-error' : '' }}">
				            	     {!! Form::label('city', 'City') !!}
				            	     {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) !!}
				            	     <small class="text-danger">{{ $errors->first('city') }}</small>
				            	 </div>

				            	 <div class="col-md-6 form-group{{ $errors->has('state') ? ' has-error' : '' }}">
				            	     {!! Form::label('state', 'State/Province') !!}
				            	     {!! Form::select('state', App\State::all()->pluck('state','state'), null, ['id' => 'state', 'class' => 'form-control', 'placeholder' => '--Select One--']) !!}
				            	     <small class="text-danger">{{ $errors->first('state') }}</small>
				            	 </div>

				            	 <div class="col-md-6 form-group{{ $errors->has('country') ? ' has-error' : '' }}">
				            	     {!! Form::label('country', 'Country') !!}
				            	     {!! Form::text('country', 'USA', ['class' => 'form-control', 'placeholder' => 'Country','readonly'=>true]) !!}
				            	     <small class="text-danger">{{ $errors->first('country') }}</small>
				            	 </div>

				            	 <div class="col-md-6 form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
				            	     {!! Form::label('zip', 'Zip/Postal Code') !!}
				            	     {!! Form::text('zip', null, ['class' => 'form-control']) !!}
				            	     <small class="text-danger">{{ $errors->first('zip') }}</small>
				            	 </div>
				            	 <div class="col-md-12 form-group">
				            	     <div class="checkbox{{ $errors->has('same_as_shipping') ? ' has-error' : '' }}">
				            	         <label for="same_as_shipping">
				            	             {!! Form::checkbox('same_as_shipping', '1', null, ['id' => 'same_as_shipping']) !!} Same As Shipping
				            	         </label>
				            	     </div>
				            	     <small class="text-danger">{{ $errors->first('same_as_shipping') }}</small>
				            	 </div>
				            </div>				        	
				            <div class="form-group">
				                {!! Form::submit("Continue", ['class' => 'btnSubmit']) !!}
				            </div>
				        
				        {!! Form::close() !!}
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header ">
                     <a class="collapsed card-link text-white" data-toggle="collapse">
                        <span class="float-right"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        <h6>3 Shipping Information</h6>
                        <span class="float-right"><i class="ti-plus"></i></span>
                     </a>
                  </div>
                  <div class="collapse @if(Request::input('target') == 'shipping') show @endif" data-parent="#accordion">
                     <div class="card-body">
                        {!! Form::open(['route'=>'web.shipping.address']) !!}
			        
				            <div class="row">
				            	<div class="col-md-6 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
					                {!! Form::label('first_name', 'First Name') !!}
					                {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
					                <small class="text-danger">{{ $errors->first('first_name') }}</small>
					            </div>

					            <div class="col-md-6 form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
					                {!! Form::label('last_name', 'Last Name') !!}
					                {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
					                <small class="text-danger">{{ $errors->first('last_name') }}</small>
					            </div>

					            {{-- <div class="col-md-6 form-group{{ $errors->has('company') ? ' has-error' : '' }}">
					                {!! Form::label('company', 'Company') !!}
					                {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Company']) !!}
					                <small class="text-danger">{{ $errors->first('company') }}</small>
					            </div> --}}

					            <div class="col-md-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					                {!! Form::label('email', 'Email') !!}
					                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
					                <small class="text-danger">{{ $errors->first('email') }}</small>
					            </div>
					            
				            </div>
				            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
				                {!! Form::label('address', 'Address') !!}
				                {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Address','rows'=>'7']) !!}
				                <small class="text-danger">{{ $errors->first('address') }}</small>
				            </div>

				            <div class="row">
				            	 <div class="col-md-6 form-group{{ $errors->has('city') ? ' has-error' : '' }}">
				            	     {!! Form::label('city', 'City') !!}
				            	     {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) !!}
				            	     <small class="text-danger">{{ $errors->first('city') }}</small>
				            	 </div>

				            	 <div class="col-md-6 form-group{{ $errors->has('state') ? ' has-error' : '' }}">
				            	     {!! Form::label('state', 'State/Province') !!}
				            	     {!! Form::select('state', App\State::all()->pluck('state','state'), null, ['id' => 'state', 'class' => 'form-control', 'placeholder' => '--Select One--']) !!}
				            	     <small class="text-danger">{{ $errors->first('state') }}</small>
				            	 </div>

				            	 <div class="col-md-6 form-group{{ $errors->has('country') ? ' has-error' : '' }}">
				            	     {!! Form::label('country', 'Country') !!}
				            	     {!! Form::text('country', 'USA', ['class' => 'form-control', 'placeholder' => 'Country','readonly'=>true]) !!}
				            	     {{-- {!! Form::select('country', ['US'=>'United States'], null, ['id' => 'country', 'class' => 'form-control', 'placeholder' => '--Select One--']) !!} --}}
				            	     <small class="text-danger">{{ $errors->first('country') }}</small>
				            	 </div>

				            	 <div class="col-md-6 form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
				            	     {!! Form::label('zip', 'Zip/Postal Code') !!}
				            	     {!! Form::text('zip', null, ['class' => 'form-control']) !!}
				            	     <small class="text-danger">{{ $errors->first('zip') }}</small>
				            	 </div>
				            </div>				        	
				            <div class="form-group">
				                {!! Form::submit("Continue", ['class' => 'btnSubmit']) !!}
				            </div>
				        
				        {!! Form::close() !!}
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header ">
                     <a class="collapsed card-link text-white" data-toggle="collapse">
                        <span class="float-right"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        <h6>4 Shipping Method</h6>
                        <span class="float-right"><i class="ti-plus"></i></span>
                     </a>
                  </div>
                  <div class="collapse @if(Request::input('target') == 'shipping_method') show @endif" data-parent="#accordion">
                     <div class="card-body">
                     	{!! Form::open(['route'=>'web.setshipping.method']) !!}
                        <div class="free-shiping-s">
                           <h3>Free Shipping</h3>
                           <a href="javascript:void(0)"><span class="rgh-nm-gh"><input type="radio" id="male" name="shipping_method" value="free" checked="true"> Free</span></a>
                           <h3>UPS</h3>
                           <a href="javascript:void(0)">
                           	<span class="rgh-nm-gh">
                           		<input type="radio" id="male" name="shipping_method" value="ups">
                           	</span>$@if(Session::has('ups_charges')) {{ Session::get('ups_charges') }} @else 0.00 @endif
                           </a>
                           <div class="al-zvb-x-as">
                           	  <a href="{{ route('web.checkout','target=shipping') }}" class="btn btn-info w-25">Back</a>
                              <button class="bt-rgd-hg" type="submit">Continue</button>
                           </div>
                        </div>
                        {!! Form::close() !!}
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header ">
                     <a class="collapsed card-link text-white" data-toggle="collapse">
                        <span class="float-right"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        <h6>5 Payment Information</h6>
                        <span class="float-right"><i class="ti-plus"></i></span>
                     </a>
                  </div>
                  <div class="collapse @if(Request::input('target') == 'payment_info') show @endif" data-parent="#accordion">
                     <div class="card-body">
                     	{!! Form::open(['route'=>'web.payment.option']) !!}
                        <div class="free-shiping-s">

                           {{-- <a href="javascript:void(0)"><span class="rgh-nm-gh" for="paypal"><input type="radio" id="saved" name="card" value="paypal"> PayPal</span></a> --}}

                           <a href="javascript:void(0)"><span class="rgh-nm-gh" for="saved"><input type="radio" id="saved" name="card" value="saved"> Credit Card (Saved)</span></a>
                           	<div class="saved-card-block" style="display: none;">
                           		<p>No new card saved</p>
                           	</div>

                           <a href="javascript:void(0)"><span class="rgh-nm-gh" for="new_entry"><input type="radio" id="new_entry" checked="true" name="card" value="new_entry"> Credit Card/Debit Card</span></a>
                           <div class="col-md-6 creadit-and-debitcard">
                           	<div class="form-group{{ $errors->has('card_number') ? ' has-error' : '' }}">
                           	    {!! Form::label('card_number', 'Card Number') !!}
                           	    {!! Form::text('card_number', null, ['class' => 'form-control', 'placeholder' => 'Card Number']) !!}
                           	    <small class="text-danger">{{ $errors->first('card_number') }}</small>
                           	</div>  
                           	<div class="row">
                           		<div class="col-md-6 form-group{{ $errors->has('exp_month') ? ' has-error' : '' }}">
	                         	    {!! Form::label('exp_month', 'Exp Month') !!}
	                         	    {{ Form::selectMonth('exp_month', null, ['class' => 'form-control', 'required']) }}
	                         	    <small class="text-danger">{{ $errors->first('exp_month') }}</small>
	                         	</div> 
	                         	<div class="col-md-6 form-group{{ $errors->has('exp_year') ? ' has-error' : '' }}">
	                         	    {!! Form::label('exp_year', 'Exp Year') !!}
	                         	    {{ Form::selectYear('exp_year', date('Y'), date('Y') + 10, null, ['class' => 'form-control', 'required']) }}
	                         	    <small class="text-danger">{{ $errors->first('exp_year') }}</small>
	                         	</div> 
                           	</div> 
                           	<div class="form-group{{ $errors->has('cvv') ? ' has-error' : '' }}">
                           	    {!! Form::label('cvv', 'Card Number') !!}
                           	    {!! Form::number('cvv', null, ['class' => 'form-control', 'placeholder' => 'CVV']) !!}
                           	    <small class="text-danger">{{ $errors->first('cvv') }}</small>
                           	</div>   
                           	<div class="form-group">
   	                    	    <div class="checkbox{{ $errors->has('save_for_future') ? ' has-error' : '' }}">
   	                    	        <label for="save_for_future">
   	                    	            {!! Form::checkbox('save_for_future', '1', null, ['id' => 'save_for_future']) !!} Save For Future
   	                    	        </label>
   	                    	    </div>
   	                    	    <small class="text-danger">{{ $errors->first('save_for_future') }}</small>
   	                    	</div>                    	
                           </div>
                           <div class="al-zvb-x-as">
                              <button style="background: #ccd1f1; color: #000;">Back</button>
                              <button class="bt-rgd-hg" type="submit">Continue</button>
                           </div>
                        </div>
                        {!! Form::close() !!}
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header ">
                     <a class="collapsed card-link text-white" data-toggle="collapse">
                        <span class="float-right"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        <h6>6 Order Riview</h6>
                        <span class="float-right"><i class="ti-plus"></i></span>
                     </a>
                  </div>
                  <div class="collapse @if(Request::input('target') == 'order_review') show @endif" data-parent="#accordion">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-12 col-md-12 vcfgml-ijh">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>Product Name</th>
                                       <th class="text-center">Price</th>
                                       <th class="text-center">Set</th>
                                       <th class="text-center">Total</th>
                                       <!-- <th> </th> -->
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	
                                 	@forelse(Cart::getContent() as $c)
                                    <tr>
                                        <td class="col-md-5">
                                          <div class="media">
					                           <a class="thumbnail pull-left" href="#"> <img src="{{ url('storage/'.$c->attributes->image) }}" class="" alt="cro" width="200" height="200"> </a>
					                           <div class="media-body">
					                              <h4 class="media-heading"><a href="#">{{ $c->name }}</a></h4>
					                              <h5 class="media-heading"> <a href="#"><span class="sz-nbm">Size</span> {{ $c->attributes->size }}</a></h5>
					                              <h5 class="media-heading"><a href="#"><span class="sz-nbm">Paper stock</span>{{ $c->attributes->paper_stock }}</a></h5>
					                              <h5 class="media-heading"><a href="#"><span class="sz-nbm">Format</span>{{ $c->attributes->formate }}</a></h5>
					                              <h5 class="media-heading"><a href="#"><span class="sz-nbm">Finish</span>{{ $c->attributes->finish }}</a></h5>
					                              <h5 class="media-heading">
					                                 <a href="#">
					                                    <span class="sz-nbm">Quantity</span>{{ $c->attributes->quentity }}
					                                  </a>
					                              </h5>
					                              <h5 class="media-heading"><a href="#"><span class="sz-nbm">Turnaround time</span>{{ $c->attributes->tourn_around_time }}</a></h5>
					                           </div>
					                        </div>
                                       </td>
                                       <td class="col-md-2 text-center"><strong>${{ $c->price }}</strong></td>
                                       <td class="col-md-3 text-center"><strong>{{ $c->quantity }}</strong></td>
                                       <td class="col-md-2 text-center"><strong>${{ $c->price*$c->quantity }}</strong></td>
                                       
                                    </tr>
                                    @empty

                                    @endif
                                    <tr>
                                       
                                       <td colspan="3">
                                          <h5 class="float-right">Subtotal</h5>
                                       </td>
                                       <td class="text-right">
                                          <h5><strong>${{ number_format(Cart::getSubTotal(),2) }}</strong></h5>
                                       </td>
                                    </tr>
                                    <tr>                                       
                                       <td colspan="3">
                                       	@if(!Cart::getCondition('UPS_Shipping'))
                                          <h5 class="float-right">Shipping & Handing(Free Shipping-Free)</h5>
                                        @else
                                          <h5 class="float-right">Shipping & Handing Charge</h5>
                                        @endif
                                       </td>
                                       <td class="text-right">
                                       	@if(Cart::getCondition('UPS_Shipping'))
                                       	  <h5><strong>${{ Cart::getCondition('UPS_Shipping')->parsedRawValue }}</strong></h5>
                                       	@else
                                          <h5><strong>$0.00</strong></h5>
                                        @endif
                                       </td>
                                    </tr>
                                    <tr>
                                       
                                       <td colspan="3">
                                          <h5 class="float-right">Sales Tax</h5>
                                       </td>
                                       <td class="text-right">
                                          <h5><strong>${{ Session::get('sales_tax') }}</strong></h5>
                                       </td>
                                    </tr>
                                    <tr>
                                       
                                       <td colspan="3">
                                          <h5 class="float-right">Total Including Tax</h5>
                                       </td>
                                       <td class="text-right">
                                          <h5><strong>${{ number_format(Cart::getTotal(),2)+number_format(Session::get('sales_tax'),2) }}</strong></h5>
                                       </td>
                                    </tr>
                                    
                                 </tbody>
                              </table>
                              <div class="al-zvb-x-as">
                                 <a href="{{ route('web.order.checkout') }}" class="btn btn-success float-right">Place Order</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
         <div class="col-md-3 col-sm-3 col-12">
            <div class="chck-out-box">
               <h3>Your Checkout Progress</h3>
               <ul>
               <h4 class="bill-asdf"><span class="ede-adde"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Billing Address</h4>
               {{-- <ul class="f-ast-xzl">
                  <li><a href="#">Lorem ipsum dummy</a></li>
                  <li><a href="#">Lorem ispum text</a></li>
                  <li><a href="#">lorem dummy posible</a></li>
                  <li><a href="#">Lorem ispum text</a></li>
                  <li><a href="#">Lorem ipsum dummy</a></li>
               </ul> --}}
               <h4 class="bill-asdf"><span class="ede-adde"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Shipping Address</h4>
               {{-- <ul class="f-ast-xzl">
                  <li><a href="#">Lorem ipsum dummy</a></li>
                  <li><a href="#">Lorem ispum text</a></li>
                  <li><a href="#">lorem dummy posible</a></li>
                  <li><a href="#">Lorem ispum text</a></li>
                  <li><a href="#">Lorem ipsum dummy</a></li>
               </ul> --}}
               <h4 class="bill-asdf"><span class="ede-adde"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Shipping Method</h4>
               @if(Session::has('shipping_method'))
               <ul class="f-ast-xzl">

                  <li><a href="#">{{ Session::get('shipping_method') }}</a></li>                  
               </ul>
               @endif
               <h4 class="bill-asdf"><span class="ede-adde"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Payment Method</h4>
               {{-- <ul class="f-ast-xzl">
                  <li><a href="#">Lorem ipsum dummy</a></li>
                  
               </ul> --}}
               <h4 class="bill-asdf"><span class="ede-adde"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Payment Information</h4>
               {{-- <ul class="f-ast-xzl">
                  <li><a href="#">Lorem ipsum dummy</a></li>
                  
               </ul> --}}
               
            </div>
         </div>
      </div>
   </div>
</section>

@endsection

@push('script')
<script type="text/javascript">
	
	$( document ).ready(function() {
		$('input[type="radio"]').click(function() {
			var value = $(this).val();
			if (value == 'saved') {

				$('.saved-card-block').show();
				$('.creadit-and-debitcard').hide();
			}else if(value == 'paypal') {
				$('.creadit-and-debitcard').hide();
				$('.saved-card-block').hide();
			} else{
				$('.creadit-and-debitcard').show();
				$('.saved-card-block').hide();
			}
		})
	    
	});
</script>
@endpush