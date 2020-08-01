@extends('admin.layout.common')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
            	<a href="{{ route('admin.testimonial.create') }}" class="btn btn-success btn-sm">Add Testimonial</a>
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

    <section class="content">
      <div class="row">
        <div class="col-md-12">
        	<table class="table table-hover">
        		<thead>
        			<tr>
        				<th>Name</th>
        				<th>Image</th>
        				<th>Message</th>
        				<th>Action</th>     				

        			</tr>
        		</thead>
        		<tbody>
        			@forelse($data as $d)
        			<tr>
        				<td>{{ $d->name }}</td>
        				<td><img src="{{ asset('storage/'.$d->image) }}" width="40" height="40"></td>
        				<td>{{ $d->message }}</td>
        				
        				<td width="100">
                            {!! Form::open(['route'=>['admin.testimonial.destroy',$d->id]]) !!}
                            @method('delete')
                            <div class="btn btn-group">
                                <a href="{{ route('admin.testimonial.show',$d->id) }}" class="btn btn-sm btn-success">View</a>
                                <a href="{{ route('admin.testimonial.edit',$d->id) }}" class="btn btn-sm btn-info">Edit</a>
                                
                                <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-model">Delete</button>

                            </div>  
                            {!! Form::close() !!}          
                        </td>
        			</tr>
        			@empty

        			@endforelse
        		</tbody>
        	</table>
            <div class="pull-5">
                {{ $data->links() }}
            </div>
        </div>
      </div>
    </section>
</div>
@endsection

@push('script')

@endpush