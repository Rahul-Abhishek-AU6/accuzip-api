@extends('admin.layout.common')

@push('style')
<link rel="stylesheet" href="{{ url('/') }}/admin-assets/minimal.css">
@endpush
@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
            	<a href="{{ route('admin.attribute.edit',$data->id) }}" class="btn btn-success btn-sm">Edit-Attribute</a>
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">show</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <p><b>AttributeName: </b>  {{ $data->name }}</p>
            <hr>
            <p><b>AttributeValue:</b></p>
            
            {!! Form::open(['route'=>['admin.attribute-value.update',$data->id]]) !!}
              <div id="attributeValue"></div>
              {!! Form::submit('Update Attribute value', ['class'=>'btn btn-sm btn-warning']) !!}
            {!! Form::close() !!}
        </div>
      </div>
    </section>
</div>
@endsection

@push('script')
<script src="{{ url('/') }}/admin-assets/taggle.js"></script>
<script type="text/javascript">
  new Taggle('attributeValue', {
      tags: {!! $data->attributeValue->pluck('value') !!},
      duplicateTagClass: 'bounce'
  });
</script>
@endpush