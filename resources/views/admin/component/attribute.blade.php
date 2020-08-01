<div style="border: 1px solid #999; padding: 10px; margin: 5px 0 5px 0" class="main-custom-all">
	<div class="row">
		<div class="col-md-6 form-group{{ $errors->has('attribute') ? ' has-error' : '' }}">
		    {!! Form::label('attribute', 'Attribute') !!}
		    {!! Form::select('attribute[]', $options->pluck('name','id'), null, [ 'class' => 'form-control', 'placeholder' => '--Sekect One---']) !!}
		    <small class="text-danger">{{ $errors->first('attribute') }}</small>
		</div>
		<div class="col-md-6 form-group{{ $errors->has('type') ? ' has-error' : '' }}">
		    
		    <div style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
		    	{!! Form::label('type', 'Type') !!} <span class="btn btn-xs btn-danger close-attribute"><i class="fa fa-times" aria-hidden="true"></i></span>
		    </div>
		    {!! Form::select('type[]', ['select'=>'select','file'=>'file','text'=>'text'], null, ['class' => 'form-control', 'placeholder' => '---Select One---','required'=>'required']) !!}
		    <small class="text-danger">{{ $errors->first('type') }}</small>
		</div>
		
	</div>
	<div class="attrivute-value-load">
		<div class="add-here">
			
		</div>
		<a href="javascript:void(0)" class="btn btn-sm btn-success float-right attrivute-value-load-btn" data-attrib="">Add new row</a>
	</div>

	<div class="clearfix"></div>
</div>