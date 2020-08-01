@extends('layouts.common')

@push('style')

@endpush

@section('content')


<div class="bg11">
	<div class="container">
	
		<ul class="nav-wizard ">
			<li class="active"><a href="javascript:void(0);"><b class="badge badge-step">1</b> Destination</a></li>
		
			<li><a href="javascript:void(0);"><b class="badge badge-step">2</b> Mail Options</a></li>
			<li><a href="javascript:void(0);"><b class="badge badge-step">3</b> Client Details</a></li>
			<li><a href="javascript:void(0);"><b class="badge badge-step">4</b> Payment</a></li>
		</ul>
		<div class="row">

		</div>
	  	<div class="workForm">
			{!! Form::open(['route' => 'web.request.how.we.own.list.upload','files'=>true]) !!}
			
			   	<div class="form-group{{ $errors->has('own_list') ? ' has-error' : '' }}">
		   	        <label class="w-100">Upload your file</label>
		   	        {!! Form::file('own_list', []) !!}
		   	        <small class="text-danger">{{ $errors->first('own_list') }}</small>
			   	</div>    
			
			    <div class=" d-flex justify-content-between">
					{!! Form::submit("BACK", ['class' => 'btn btn-success mr-5 mt-2 w-25']) !!}

			        {!! Form::submit("NEXT", ['class' => 'btn btn-success ml-5 mt-2 w-25']) !!}
			    </div>
			
			{!! Form::close() !!}	
		</div>	
	</div>
</div>

		
	


@endsection

@push('script')

@endpush