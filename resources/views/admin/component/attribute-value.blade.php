<div class="sub-division-div">
	<hr>
	<div class="row">

		<div class="col-md-4 form-group{{ $errors->has('attribute') ? ' has-error' : '' }}">
		    {!! Form::label('attribute', ucfirst(strtolower($atname)).' Value') !!} 
		    
		    {!! Form::select(strtolower($atname).'_value[]', $atoption->pluck('value','id'), null, ['class' => 'form-control', 'placeholder' => '--Sekect One---']) !!}
		    <small class="text-danger">{{ $errors->first('attribute') }}</small>
		</div>

		<div class="col-md-4 form-group{{ $errors->has('price') ? ' has-error' : '' }}">
		    {!! Form::label('price', 'Price') !!}
		    
		    {!! Form::text(strtolower($atname).'price[]', 0.00, ['class' => 'form-control',]) !!}
		</div>
		<div class="col-md-4 form-group{{ $errors->has('price') ? ' has-error' : '' }}">
		    {!! Form::label('price', 'Weight') !!}
		    <span class="btn btn-xs btn-danger close-clienl-attribute float-right" style="align-items: center;"><i class="fa fa-times" aria-hidden="true"></i></span>
		    {!! Form::text(strtolower($atname).'weight[]', 0, ['class' => 'form-control',]) !!}
		</div>
	</div>
</div>