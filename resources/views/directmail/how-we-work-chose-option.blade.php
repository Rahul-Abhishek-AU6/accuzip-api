@extends('layouts.common')

@push('style')

@endpush

@section('content')
<div class="bg11">
	<div class="container">
		<ul class="nav-wizard">
			<li class="complete"><a href="javascript:void(0);"><b class="badge badge-step">1</b> Destination</a></li>
		{{-- <li><a href="javascript:void(0);"><b class="badge badge-step">2</b> Maps</a></li> --}}
			<li class="active"><a href="javascript:void(0);"><b class="badge badge-step">2</b> Mail Options</a></li>
			<li><a href="javascript:void(0);"><b class="badge badge-step">3</b> Client Details</a></li>
			<li><a href="javascript:void(0);"><b class="badge badge-step">4</b> Payment</a></li>
		</ul>
		<div class="row">

		</div>
		<div class="workForm">        

			{!! Form::open(['route'=>['web.direct-mail.select.post'],'files'=>true]) !!}
				<div class="form-group{{ $errors->has('mail_format') ? ' has-error' : '' }}">
				    {!! Form::label('mail_format', 'Mail Format') !!}
				    {!! Form::select('mail_format', 
				    	[
				    		'4"x6"'=>'4"x6" - Standard Postcard Size',
				    		'6"x9"'=>'6"x9" - Full Size Postcard',
				    		'6"x11"'=>'6"x11" - Jumbo Postcard',

				    	], null, ['id' => 'mail_format', 'class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('mail_format') }}</small>
				</div>
				<div class="form-group{{ $errors->has('choose_design_option') ? ' has-error' : '' }}">
				    {!! Form::label('choose_design_option', 'Choose Design Option') !!}
				    {!! Form::select('choose_design_option', 
				    	[
				    		'upload_art_work' => 'Upload Artwork', 
				    		'Profession_design_service' => 'Professional Design Service ($150)', 
				    	], null, ['id' => 'choose_design_option', 'class' => 'form-control', 'required' => 'required','placeholder'=>'--Select One--']) !!}
				    <small class="text-danger">{{ $errors->first('choose_design_option') }}</small>
				</div>
				<div style="display: none;" class="art_work_field_ form-group{{ $errors->has('art_work') ? ' has-error' : '' }}">
				    {!! Form::label('art_work', 'Choose Your Artwork') !!}
				    {!! Form::file('art_work', []) !!}
				    <small class="text-danger">{{ $errors->first('art_work') }}</small>
				</div>
				


			<div style="display: flex; justify-content: space-between; padding-top: 20px;">
				<a href="#" class="btn btn-success disabled">Back</a>
				<button class="btn btn-sm btn-success py-2" type="submit">NEXT</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection

@push('script')
<script type="text/javascript">
	$('#choose_design_option').change(function() {
		var value = $(this).val();
		if (value == 'upload_art_work') {
			$('.art_work_field_').show();
		}else{
			$('.art_work_field_').hide();
		}
	});
</script>
@endpush