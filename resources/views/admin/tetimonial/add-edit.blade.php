@extends('admin.layout.common')

@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endpush


@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
              @if(isset($data))
                <h3>Edit Post</h3>
              @else
            	 <h3>Add Testimonial</h3>
              @endif
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Testimonial</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <section class="content">
      <div class="container">
        @if(isset($data))
          {!! Form::open(['route'=>['admin.testimonial.update',$data->id],'files'=>true]) !!}
          @method('put')
        @else
         {!! Form::open(['route'=>'admin.testimonial.store','files'=>true]) !!}
        @endif
      	
      	<div class="row">      		
      		<div class="col-md-12">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', $data->name??null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                    {!! Form::label('company_name', 'Company Name') !!}
                    {!! Form::text('company_name', $data->company_name??null, ['class' => 'form-control', 'placeholder' => 'Company Name']) !!}
                    <small class="text-danger">{{ $errors->first('company_name') }}</small>
                </div>
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    {!! Form::label('image', 'Image') !!}
                    {!! Form::file('image', []) !!}
                    <small class="text-danger">{{ $errors->first('image') }}</small>
                </div>
                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                    {!! Form::label('message', 'Message') !!}
                    {!! Form::textarea('message', $data->message??null, ['class' => 'form-control', 'placeholder' => 'Message','cols'=>4]) !!}
                    <small class="text-danger">{{ $errors->first('message') }}</small>
                </div>
            </div>
      		<div class="col-md-12 col-sm-12 col-12">
      			@if(isset($data))
              <button class="btn btn-info pull-md-right" type="Submit">Update Post</button>
            @else
              <button class="btn btn-success pull-md-10" type="Submit">Add Post</button>
            @endif
      		</div>
      		<div class="clearfix"></div>
      		<br>
      	</div>     
      	{!! Form::close() !!} 
      </div>
    </section>
</div>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript">
  $(function () {
    $('#compose-textarea').summernote({
      height:450,
      styleWithSpan: false,
      disableDragAndDrop: true,
      popover: {
        image: [
          ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
          ['float', ['floatLeft', 'floatRight', 'floatNone']],
          ['remove', ['removeMedia']]
        ],
        link: [
          ['link', ['linkDialogShow', 'unlink']]
        ],
        table: [
          ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
          ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
        ],
        air: [
          ['color', ['color']],
          ['font', ['bold', 'underline', 'clear']],
          ['para', ['ul', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture']]
        ]
      },

    })
  })

  $(document).ready(function() {
    $('.post-category').select2();
  });
</script>
@endpush