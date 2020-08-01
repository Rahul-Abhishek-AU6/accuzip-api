@extends('layouts.common')

@push('style')

@endpush

@section('content')
<div class="container">
	<ul class="nav-wizard">
		<li class="complete"><a href="javascript:void(0);"><b class="badge badge-step">1</b> Destination</a></li>
	{{-- <li><a href="javascript:void(0);"><b class="badge badge-step">2</b> Maps</a></li> --}}
		<li class="complete"><a href="javascript:void(0);"><b class="badge badge-step">2</b> Mail Options</a></li>
		<li class="active"><a href="javascript:void(0);"><b class="badge badge-step">3</b> Client Details</a></li>
		<li><a href="javascript:void(0);"><b class="badge badge-step">4</b> Payment</a></li>
	</ul>
	<div class="row">

	</div>
	<div class="workForm">        

		{!! Form::open(['route'=>['web.address-get-quote.how.we.work-save.ownlist']]) !!}
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
			</div>

			<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
			    {!! Form::label('address', 'Address') !!}
			    {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => 3,'placeholder'=>'Address']) !!}
			    <small class="text-danger">{{ $errors->first('address') }}</small>
			</div>
			<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
			    {!! Form::label('country', 'Country') !!}
			    {!! Form::text('country', 'USA', ['class' => 'form-control','readonly'=>true]) !!}
			    <small class="text-danger">{{ $errors->first('country') }}</small>
			</div>
			<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
        	     {!! Form::label('state', 'State') !!}
        	     {!! Form::select('state', App\State::all()->pluck('state','state'), null, ['id' => 'state', 'class' => 'form-control', 'placeholder' => '--Select One--']) !!}
        	     <small class="text-danger">{{ $errors->first('state') }}</small>
        	 </div>
        	 <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
        	     {!! Form::label('city', 'City') !!}
        	     {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) !!}
        	     <small class="text-danger">{{ $errors->first('city') }}</small>
        	 </div>
			<div class="form-group{{ $errors->has('pin') ? ' has-error' : '' }}">
			    {!! Form::label('pin', 'Zip Code') !!}
			    {!! Form::text('pin', null, ['class' => 'form-control', 'placeholder' => 'Zip Code']) !!}
			    <small class="text-danger">{{ $errors->first('pin') }}</small>
			</div>


		<div class="">
			<button class="btn btn-sm btn-success py-2" type="submit">NEXT</button>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection

@push('script')

@endpush