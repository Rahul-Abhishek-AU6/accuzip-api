@extends('layouts.common')

@push('style')

@endpush

@section('content')

  	
		@if(Request::input('accuzip_servie') =='')
		<div class="bg11">

			<div class="container">
			{{-- <nav aria-label="breadcrumb">
			<ol class="breadcrumb bg-white">
				<li class="breadcrumb-item">
					<a href="#">Home</a>
				</li>
				<li class="breadcrumb-item">
					<a href="#">Library</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Data</li>
			</ol>
			</nav> --}}
			<ul class="nav-wizard ">
    			<li class="active"><a href="javascript:void(0);"><b class="badge badge-step">1</b> Destination</a></li>
			{{-- <li><a href="javascript:void(0);"><b class="badge badge-step">2</b> Maps</a></li> --}}
				<li><a href="javascript:void(0);"><b class="badge badge-step">2</b> Mail Options</a></li>
				<li><a href="javascript:void(0);"><b class="badge badge-step">3</b> Client Details</a></li>
				<li><a href="javascript:void(0);"><b class="badge badge-step">4</b> Payment</a></li>
			</ul>
			<div class="row">
	
			</div>
		  		<div class="workForm">
				{!! Form::open(['method' => 'get', 'route' => 'web.request.how.we.work']) !!}
				
				    <div class="radio{{ $errors->has('accuzip_servie') ? ' has-error' : '' }}">
				        <label for="eddm">
							{!! Form::radio('accuzip_servie', 'eddm',  null, ['id' => 'eddm']) !!} 
							<span> <span class="d-block">EDDM</span>
								Use our mapping tool to choose the ZIP code and carrier route of your targeted list.</span>
						
				        </label>
				        <small class="text-danger">{{ $errors->first('accuzip_servie') }}</small>
				    </div>

				    <div class="radio{{ $errors->has('accuzip_servie') ? ' has-error' : '' }}">
				        <label for="direct_mail">
							{!! Form::radio('accuzip_servie', 'direct_mail',  null, ['id' => 'direct_mail']) !!} 
							<span> <span class="d-block">TARGETED DIRECT MAIL</span>
								Use our simple mail filtering tool to pinpoint the exact demographic you are targeting.</span>
					   
						</label>
				        <small class="text-danger">{{ $errors->first('accuzip_servie') }}</small>
				    </div>

				    <div class="radio{{ $errors->has('accuzip_servie') ? ' has-error' : '' }}">
				        <label for="own_list">
							{!! Form::radio('accuzip_servie', 'own_list',  null, ['id' => 'own_list']) !!} 
							<span><span class="d-block">UPLOAD YOUR OWN TARGETED DIRECT MAIL LIST</span> Use our upload tool to import an Excel or CSV file of your mailing list and we’ll handle the rest.</span>
				        </label>
				        <small class="text-danger">{{ $errors->first('accuzip_servie') }}</small>
				    </div>
				
				    <div class=" d-flex justify-content-between">
						{!! Form::submit("BACK", ['class' => 'btn btn-success mr-5 mt-2 w-25']) !!}

				        {!! Form::submit("NEXT", ['class' => 'btn btn-success ml-5 mt-2 w-25']) !!}
				    </div>
				
				{!! Form::close() !!}	
				</div>	
			</div>
				
		@elseif(Request::input('accuzip_servie') == 'eddm')
			<div class="container">
				<iframe src="{{ $data['eddm_url'] }}" width="100%" height="750" style="border: none;"></iframe>
					<div class="p-3 text-center">
						<a href="{{ route('web.request-quote.how.we.work',['guid'=>$data['guid'],'accuzip_servie'=>Request::input('accuzip_servie')]) }}" class="btn btn-sm btn-success py-2">NEXT</a>
					</div>
			</div>
			</div>
			@else
		@endif
	


@endsection

@push('script')

@endpush