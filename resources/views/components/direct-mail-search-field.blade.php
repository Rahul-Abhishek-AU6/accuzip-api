@php
	$search_option = App\directMailSearchOption::where('category',$dataType)->get();
@endphp

<div class="form-group">
	<label for="inputState">Search Field</label>
	{!! Form::select('search_field', $search_option->pluck('display_name','search_key'), 'entire_database', ['class'=>'form-control','placeholder'=>'---Select One---']) !!}      
</div>