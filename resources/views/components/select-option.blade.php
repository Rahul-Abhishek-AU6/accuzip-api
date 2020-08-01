

@if($size == '11"X17"') 
{!! Form::select('choose_design_option', 
	[
		'upload_art_work' => 'Upload Artwork', 
		'Profession_design_service' => 'Professional Design Service ($250)', 
	], null, ['id' => 'choose_design_option', 'class' => 'form-control', 'required' => 'required','placeholder'=>
	'--Select One--']) 
!!}
@else
{!! Form::select('choose_design_option', 
	[
		'upload_art_work' => 'Upload Artwork', 
		'Profession_design_service' => 'Professional Design Service ($150)', 
	], null, ['id' => 'choose_design_option', 'class' => 'form-control', 'required' => 'required','placeholder'=>
	'--Select One--']) 
!!}
@endif