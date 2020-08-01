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
               <h3>Add New Address</h3>               
               <h5>ADDRESS</h5>
               {!! Form::open(['route'=>'web.user.address.add']) !!}
                  <div class="row">
                     <div class="col-md-8 col-sm-12 col-12">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                  {!! Form::label('first_name', 'First Name') !!}
                                  {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
                                  <small class="text-danger">{{ $errors->first('first_name') }}</small>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                  {!! Form::label('last_name', 'Last Name') !!}
                                  {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
                                  <small class="text-danger">{{ $errors->first('last_name') }}</small>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                                  {!! Form::label('company', 'Company') !!}
                                  {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Company']) !!}
                                  <small class="text-danger">{{ $errors->first('company') }}</small>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  {!! Form::label('email', 'Email address') !!}
                                  {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
                                  <small class="text-danger">{{ $errors->first('email') }}</small>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                               {!! Form::label('address', 'Address') !!}
                               {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Address','rows'=>6]) !!}
                               <small class="text-danger">{{ $errors->first('address') }}</small>
                           </div>                             
                           
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                  {!! Form::label('city', 'City *') !!}
                                  {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) !!}
                                  <small class="text-danger">{{ $errors->first('city') }}</small>
                              </div>
                              
                           </div>
                           <div class="col-md-6">
                              <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                  {!! Form::label('state', 'State/Province *') !!}
                                  {!! Form::select('state', App\State::all()->pluck('state','state'), null, ['id' => 'state', 'class' => 'form-control','placeholder'=>'--Select One--']) !!}
                                  <small class="text-danger">{{ $errors->first('state') }}</small>
                              </div>
                              
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                                  {!! Form::label('zip', 'Zip/Postal Code *') !!}
                                  {!! Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Zip']) !!}
                                  <small class="text-danger">{{ $errors->first('zip') }}</small>
                              </div>
                              
                           </div>
                           <div class="col-md-6">
                              <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                  {!! Form::label('country', 'Country *') !!}
                                  {!! Form::select('country', ['US'=>'United State'], null, ['id' => 'country', 'class' => 'form-control', 'placeholder' => '--Select One--']) !!}
                                  <small class="text-danger">{{ $errors->first('country') }}</small>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="nxjisi">
                     <a href="#" class="abx-xklop btn btn-warning btn-sm">Back</a> 
                     <button type="submit" class="btn btn-sm btn-success float-right">Save Address</button> 
                  </div>
               {!! Form::close() !!}
               
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('script')

@endpush