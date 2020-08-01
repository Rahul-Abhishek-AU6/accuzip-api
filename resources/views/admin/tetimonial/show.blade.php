@extends('admin.layout.common')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
            	<a href="{{ route('admin.testimonial.edit',$data->id) }}" class="btn btn-success btn-sm">Edit-Testimonial</a>
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
            <h2>{{ $data->name }}</h2>
            <hr>
            {{-- <img src="{{ asset('storage/'.$data->image) }}" height="30"> --}}
        	  <p>{{ $data->message }}</p>
        </div>
      </div>
    </section>
</div>
@endsection

@push('script')

@endpush