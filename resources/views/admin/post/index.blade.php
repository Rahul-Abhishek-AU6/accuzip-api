@extends('admin.layout.common')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
            	<a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-sm">Add Post</a>
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

    <section class="content">
      <div class="row">
        <div class="col-md-12">
        	<table class="table table-hover">
        		<thead>
        			<tr>
        				<th>Title</th>
        				<th>Post Image</th>
        				<th>Status</th>
        				<th>Featured</th>
        				<th>Created at</th>
        				<th>Action</th>

        			</tr>
        		</thead>
        		<tbody>
        			@forelse($posts as $p)
        			<tr>
        				<td>{{ $p->title }}</td>
        				<td><img src="{{ asset('storage/'.$p->image) }}" width="40" height="40"></td>
        				<td>{{ $p->status }}</td>
        				<td>{{ (($p->featured)?'YES':'NO') }}</td>
        				<td>{{ $p->created_at->diffForHumans() }}</td>
        				<td width="100">
                            {!! Form::open(['route'=>['admin.posts.destroy',$p->slug]]) !!}
                            @method('delete')
                            <div class="btn btn-group">
                                <a href="{{ route('admin.posts.show',$p->slug) }}" class="btn btn-sm btn-success">View</a>
                                <a href="{{ route('admin.posts.edit',$p->slug) }}" class="btn btn-sm btn-info">Edit</a>
                                
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
                {{ $posts->links() }}
            </div>
        </div>
      </div>
    </section>
</div>
@endsection

@push('script')

@endpush