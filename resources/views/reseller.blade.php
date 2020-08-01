@extends('layouts.common')

@push('style')

@endpush

@section('content')
<section class=" sldr">
   <img src="{{ url('') }}/web/images/office-stasinary.png" class="" alt="Slider  ">
   <div class="marketing-maters">
      <h2>RESELLER PARTNERSHIPS</h2>
      <ul class="m-m nhj">
         <span><a href="#">Home / </a></span>
         <span><a href="#">Reseller</a></span>
      </ul>
   </div>
</section>
<section class="prnt-mrkt new-turn-arounsd">
   <div class="container">
      <div class="row">
         <div class="col-md-4 col-sm-4 col-12">
            <div class="nabh-ahskl-ass">
               <h2><a href="#"> 10 + Employees</a></h2>
               <p>Does your company have
                  more than 10 employees
                  Using <span class="blue-sx-z"><a href="#">RushPrintNYC.com?</a></span>
               </p>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="nabh-ahskl-ass">
               <h2><a href="#">Design Agency</a></h2>
               <p>Are you part of a
                  Graphic Design Agency
                  <span class="blue-sx-z">Looking for a partner</span> to
                  bring you creations to life?
               </p>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="nabh-ahskl-ass">
               <h2><a href="#">Print Shop/Broker</a></h2>
               <p>Are you part of an existing
                  Print Shop looking to
                  expand your product line or
                  you are a Print Broker and
                  need a <span class="blue-sx-z">Print Service
                  Provider that makes you
                  look like an All-Star.</span>
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="Buying Custom nw-art-xnlao-s">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2>IF YOU FALL INTO ANY OF THE ABOVE CATEGORIES WE SHOULD TALK!</h2>
            <p>Gone are the days when all you could do is upload a file and hope for the best, no longer do you have to wait 4 or 5 days just for your job to ship. We off the industry's best reseller support and know what to do to make our partners successful. Please tell us a little about yourself and we will follow up shortly to see how we can help each other grow.</p>
         </div>
      </div>
   </div>
</section>
<section class="cnt-today">
   <div class="container">
      <h2>BECOME RESELLER</h2>
      <p></p>
      {!! Form::open(['route'=>'web.reseller.save']) !!}
         <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 col-sm-10 col-12">
               <div class="row">
                  <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		                  	    {!! Form::label('name', 'Name') !!}
		                  	    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
		                  	    <small class="text-danger">{{ $errors->first('name') }}</small>
		                  	</div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	                     	    {!! Form::label('email', 'Email address') !!}
	                     	    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eg: foo@bar.com']) !!}
	                     	    <small class="text-danger">{{ $errors->first('email') }}</small>
	                     	</div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
	                     	    {!! Form::label('phone', 'Phone Number') !!}
	                     	    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
	                     	    <small class="text-danger">{{ $errors->first('phone') }}</small>
	                     	</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
	                     	    {!! Form::label('company', 'Company') !!}
	                     	    {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Company']) !!}
	                     	    <small class="text-danger">{{ $errors->first('company') }}</small>
	                     	</div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>What category do you fall under?*</label><br>

                              <div class="form-check-inline anshk clearfix">
                                 <label class="customradio">
                                 <input type="radio" value="10 + Employees" name="employe_category">
                                 <span class="radiotextsty">10 + Employees</span>
                                 <span class="checkmark"></span>
                                 </label>        
                              </div>
                              <div class="form-check-inline anshk clearfix">
                                 <label class="customradio">
                                 <input type="radio" value="10 + Employees" name="employe_category">
                                 <span class="radiotextsty">10 + Employees</span>
                                 <span class="checkmark"></span>
                                 </label>        
                              </div>
                              <div class="form-check-inline anshk clearfix">
                                 <label class="customradio">
                                 <input type="radio" value="Design Agency" name="employe_category">
                                 <span class="radiotextsty">Design Agency</span>
                                 <span class="checkmark"></span>
                                 </label>
                              </div>
                              <div class="form-check-inline anshk clearfix">
                                 <label class="customradio">
                                 <input type="radio" value="Print Broker" name="employe_category">
                                 <span class="radiotextsty">Print Broker</span>
                                 <span class="checkmark"></span>
                                 </label> 
                              </div>
                              <div class="form-check-inline anshk clearfix">
                              		<small class="text-danger">{{ $errors->first('employe_category') }}</small>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group{{ $errors->has('project_detail') ? ' has-error' : '' }}">
		                         {!! Form::label('project_detail', 'Project Detail') !!}
		                         {!! Form::textarea('project_detail', null, ['class' => 'form-control w-100', 'placeholder' => 'Project Detail','cols'=> '10']) !!}
		                         <small class="text-danger">{{ $errors->first('project_detail') }}</small>
		                    </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4"><input type="submit" value="Send" class="get-start" style="color: #fff;"></div>
                  <div class="col-md-4"></div>
               </div>
            </div>
            <div class="col-md-1"></div>
         </div>
      {!! Form::close() !!}
   </div>
</section>
@endsection

@push('script')

@endpush