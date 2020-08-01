@extends('layouts.common')

@push('style')

@endpush

@section('content')
<div class="bg11" style="background-size: 170%;">
  <div class="container">
    <ul class="nav-wizard">
      <li class="complete"><a href="javascript:void(0);"><b class="badge badge-step">1</b> Destination</a></li>
    {{-- <li><a href="javascript:void(0);"><b class="badge badge-step">2</b> Maps</a></li> --}}
      <li class="complete"><a href="javascript:void(0);"><b class="badge badge-step">2</b> Mail Options</a></li>
      <li class="complete"><a href="javascript:void(0);"><b class="badge badge-step">3</b> Client Details</a></li>
      <li class="active"><a href="javascript:void(0);"><b class="badge badge-step">4</b> Payment</a></li>
    </ul>
    <div class="row">

    </div>
    <div class="workForm p-0">

      {!! Form::open(['route'=>['web.update-quote.how.we.payment'],'files'=>true]) !!}
      {!! Form::hidden('own_list_option', '1') !!}
      <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Order Summary
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <p>Total Quantity: <b>{{ $totalQty }}</b></p>
          <p>Size:  <b>{{ $size }}</b></p>        
          <p>Design Option: <b>{{ (($designOption == 'Profession_design_service')?'Professional Design Option':'Custom Design Option') }}</b></p>
          <p>Payable Amount: $<b>{{ $amount }}</b></p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Payment
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
                  {!! Form::label('name', 'Name on card') !!}
                  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name on card']) !!}
                  <small class="text-danger">{{ $errors->first('name') }}</small>
              </div>
              <div class="form-group{{ $errors->has('cvv') ? ' has-error' : '' }}">
                  {!! Form::label('cvv', 'Card Number') !!}
                  {!! Form::number('cvv', null, ['class' => 'form-control', 'placeholder' => 'CVV']) !!}
                  <small class="text-danger">{{ $errors->first('cvv') }}</small>
              </div> 
              
              <div class="">
                <button class="btn btn-sm btn-success py-2" type="submit">PAY ${{ $amount }}</button>
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