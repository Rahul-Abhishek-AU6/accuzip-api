@extends('admin.layout.common')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
            	<a href="#" class="btn btn-link btn-sm">Edit Store Address</a>
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="row">
        <div class="col-md-12">        	
            {!! Form::open(['route' => ['admin.store-address.update',$data->id]]) !!}
                @method('put')
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', $data->name??'', ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group{{ $errors->has('billing_name') ? ' has-error' : '' }}">
                    {!! Form::label('billing_name', 'Billing Name') !!}
                    {!! Form::text('billing_name', $data->billing_name??'', ['class' => 'form-control', 'placeholder' => 'Billing Name']) !!}
                    <small class="text-danger">{{ $errors->first('billing_name') }}</small>
                </div>
                <div class="form-group{{ $errors->has('address_1') ? ' has-error' : '' }}">
                    {!! Form::label('address_1', 'Address Line 1') !!}
                    {!! Form::text('address_1', $data->address_one??'', ['class' => 'form-control', 'placeholder' => 'Address line 1']) !!}
                    <small class="text-danger">{{ $errors->first('address_1') }}</small>
                </div>
                <div class="form-group{{ $errors->has('address_2') ? ' has-error' : '' }}">
                    {!! Form::label('address_2', 'Address Line 2') !!}
                    {!! Form::text('address_2', $data->address_two??'', ['class' => 'form-control', 'placeholder' => 'Address line 2']) !!}
                    <small class="text-danger">{{ $errors->first('address_2') }}</small>
                </div>
                <div class="form-group{{ $errors->has('address_3') ? ' has-error' : '' }}">
                    {!! Form::label('address_3', 'Address Line 3') !!}
                    {!! Form::text('address_3', $data->address_three??'', ['class' => 'form-control', 'placeholder' => 'Address line 3']) !!}
                    <small class="text-danger">{{ $errors->first('address_3') }}</small>
                </div>
                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                    {!! Form::label('state', 'State') !!}
                    {!! Form::text('state', $data->state??'', ['class' => 'form-control', 'placeholder' => 'State']) !!}
                    <small class="text-danger">{{ $errors->first('state') }}</small>
                </div>
                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                    {!! Form::label('city', 'City') !!}
                    {!! Form::text('city', $data->city??'', ['class' => 'form-control', 'placeholder' => 'City']) !!}
                    <small class="text-danger">{{ $errors->first('city') }}</small>
                </div>
                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                    {!! Form::label('country', 'Country') !!}
                    {!! Form::text('country', $data->country??'', ['class' => 'form-control', 'placeholder' => 'Country']) !!}
                    <small class="text-danger">{{ $errors->first('country') }}</small>
                </div>
                <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
                    {!! Form::label('postal_code', 'Postal Code') !!}
                    {!! Form::text('postal_code', $data->postal_code??'', ['class' => 'form-control', 'placeholder' => 'Postal Code']) !!}
                    <small class="text-danger">{{ $errors->first('postal_code') }}</small>
                </div>

                <div class="btn-group float-right">
                    {!! Form::submit("Update", ['class' => 'btn btn-success']) !!}
                </div>
            
            {!! Form::close() !!}
        </div>
      </div>
    </section>
</div>
@endsection

@push('script')

@endpush