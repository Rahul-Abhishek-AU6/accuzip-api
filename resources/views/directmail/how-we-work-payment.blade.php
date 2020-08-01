@extends('layouts.common')

@push('style')

@endpush

@section('content')
<div class="bg11" style="background-size:120%">
<div class="container">
	<ul class="nav-wizard">
		<li class="complete"><a href="javascript:void(0);"><b class="badge badge-step">1</b> Destination</a></li>
	{{-- <li><a href="javascript:void(0);"><b class="badge badge-step">2</b> Maps</a></li> --}}
		<li class="complete"><a href="javascript:void(0);"><b class="badge badge-step">2</b> Mail Options</a></li>
    <li class="complete"><a href="javascript:void(0);"><b class="badge badge-step">3</b> Client Details</a></li>
		<li class="active"><a href="javascript:void(0);"><b class="badge badge-step">4</b> Payment</a></li>
	</ul>

	<div class="workForm p-0">

    {!! Form::open(['route'=>['web.direct-mail.payment.post'],'files'=>true]) !!}

		<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left d-flex justify-content-lg-between" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Order Summary  <i class="fa fa-angle-down" aria-hidden="true"></i>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
	      <p>Total Quantity: <b>{{ $data['Total_Possible'] }}</b></p>
        <p>Size:  <b>{{ $data['mail_format'] }}</b></p>        
        <p>Design Option: <b>{{ (($data['choose_design_option'] == 'Profession_design_service')?'Professional Design Option':'Custom Design Option') }}</b></p>
        <p>Payable Amount: $<b>{{ $amount??0 }}</b></p>
	    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed justify-content-lg-between d-flex" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		    Payment <i class="fa fa-angle-down" aria-hidden="true"></i>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
  	   <div class="creadit-and-debitcard">
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
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'Name On Card') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name on card']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>
            <div class="form-group{{ $errors->has('cvv') ? ' has-error' : '' }}">
                {!! Form::label('cvv', 'Card Number') !!}
                {!! Form::number('cvv', null, ['class' => 'form-control', 'placeholder' => 'CVV']) !!}
                <small class="text-danger">{{ $errors->first('cvv') }}</small>
            </div> 
            
            <div class="" style="display: flex;justify-content: space-between; margin-top: 20px;">
              <a href="#" class="btn btn-success">Back</a>
              <button class="btn btn-sm btn-success py-2" type="submit">PAY ${{ $amount??'0' }}</button>
            </div>               
        </div>
  	
  	 </div>
    </div>
  </div>
  
</div>

	

		
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection

@push('script')

@endpush