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
              @if(isset($post))
                <h3>Edit Post</h3>
              @else
            	 <h3>Add Post</h3>
              @endif
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Post</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <section class="content">
      <div class="container">
        @if(isset($post))
          {!! Form::open(['route'=>['admin.posts.update',$post->slug],'files'=>true]) !!}
          @method('put')
        @else
         {!! Form::open(['route'=>'admin.posts.store','files'=>true]) !!}
        @endif
      	
      	<div class="row">      		
      		<div class="col-md-8 col-sm-8 col-12">
      			<div class="card">
      				<div class="card-title" style="padding-left: 15px">
      					<h4 >Title</h4>
      				</div>
      				<div class="card-body">
      					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
		      			    {!! Form::text('title', $post->title??null, ['class' => 'form-control', 'placeholder' => 'Post Title']) !!}
		      			    <small class="text-danger">{{ $errors->first('title') }}</small>
		      			</div>
      				</div>
      			</div>
      			<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
      			    {!! Form::label('body', 'Body') !!}
      			    {!! Form::textarea('body', $post->body??null, ['class' => 'form-control','id'=>'compose-textarea']) !!}

      			    <small class="text-danger">{{ $errors->first('body') }}</small>
      			</div>
      		</div>
      		<div class="col-md-4 col-sm-4 col-12">      			
      			<div class="card">
      				<div class="card-title bg-primary text-center">
      					<h4>Post Details</h4>
      				</div>
      				<div class="card-body">
      					
      					<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
      					    {!! Form::label('status', 'Post Status') !!}
      					    {!! Form::select('status', ['PUBLISHED'=>'PUBLISHED','DRAFT'=>'DRAFT','PENDING'=>'PENDING'], $post->status??null, ['id' => 'status', 'class' => 'form-control']) !!}
      					    <small class="text-danger">{{ $errors->first('status') }}</small>
      					</div>

                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                    {!! Form::label('category', 'Post Category') !!}
                    {!! Form::select('category', ['Bussiness'=>'Bussiness','Marketing'=>'Marketing','Products'=>'Products'], null, ['id' => 'category', 'class' => 'form-control', 'placeholder' => '---Select One---']) !!}
                    <small class="text-danger">{{ $errors->first('category') }}</small>
                </div>

      					<div class="form-group">
      					    <div class="checkbox{{ $errors->has('featured') ? ' has-error' : '' }}">
      					        <label for="featured">
      					            {!! Form::checkbox('featured', '1', $post->featured??null, ['id' => 'featured']) !!} Featured
      					        </label>
      					    </div>
      					    <small class="text-danger">{{ $errors->first('featured') }}</small>
      					</div>
      				</div>
      			</div>

      			<div class="card">
      				<div class="card-title bg-info text-center">
      					<h4>Post Image</h4>
      				</div>
      				<div class="card-body">
      					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
      					    {!! Form::label('image', 'Image') !!}
      					    {!! Form::file('image', ['class' => 'form-control']) !!}
      					    <small class="text-danger">{{ $errors->first('image') }}</small>
      					</div>
      					
      				</div>
      			</div>

      			<div class="card">
      				<div class="card-title bg-danger text-center">
      					<h4>SEO Content</h4>
      				</div>

      				<div class="card-body">
      					<div class="form-group{{ $errors->has('meta_desc') ? ' has-error' : '' }}">
      					    {!! Form::label('meta_desc', 'Meta Description') !!}
      					    {!! Form::text('meta_desc', $post->meta_desc??null, ['class' => 'form-control']) !!}
      					    <small class="text-danger">{{ $errors->first('meta_desc') }}</small>
      					</div>

      					<div class="form-group{{ $errors->has('meta_keyword') ? ' has-error' : '' }}">
      					    {!! Form::label('meta_keyword', 'Meta Keyword') !!}
      					    {!! Form::text('meta_keyword', $post->meta_keyword??null, ['class' => 'form-control']) !!}
      					    <small class="text-danger">{{ $errors->first('meta_keyword') }}</small>
      					</div>

      					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
      					    {!! Form::label('seo_title', 'Seo Title') !!}
      					    {!! Form::text('seo_title', $post->seo_title??null, ['class' => 'form-control']) !!}
      					    <small class="text-danger">{{ $errors->first('seo_title') }}</small>
      					</div>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-12 col-sm-12 col-12">
      			@if(isset($post))
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