@extends('layouts.common')

@push('style')

@endpush

@section('content')
<div class="container">
	<div class="row">
		<p class="w-100">Your downloading will be start automaticaly if not starting click <a href="{{ $url }}" download="true" class="btn btn-link">Download</a> now.</p>

		{!! Form::open(['route'=>'web.how-we-work.complete.order','files'=>true]) !!}
			<div class="form-group{{ $errors->has('eddm_file') ? ' has-error' : '' }}">
			    {!! Form::label('eddm_file', 'Upload Your Eddm Data') !!}
			    {!! Form::file('eddm_file', []) !!}
			    <small class="text-danger">{{ $errors->first('eddm_file') }}</small>
			</div>
			<div class="form-group">
				{!! Form::submit('Upload', ['class'=>'btn btn-sm btn-success']) !!}
			</div>
		{!! Form::close() !!}
	</div>

</div>
@endsection

@push('script')

@endpush