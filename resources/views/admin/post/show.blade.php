@extends('admin.layout.common')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
            	<a href="{{ route('admin.posts.edit',$post->slug) }}" class="btn btn-success btn-sm">Edit-Post</a>
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
            <h2>{{ $post->title }}</h2>
            <hr>
            <img src="{{ asset('storage/'.$post->image) }}"  height="200">
        	{!! $post->body !!}
        </div>
      </div>
    </section>
</div>
@endsection

@push('script')

@endpush