@extends('admin.layout.common')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
            	{{-- <a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-sm">Add Post</a> --}}
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Order</li>
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
        				<th>Total Amount</th>
        				<th>Payment Status</th>        				
        				<th>Created at</th>
        				<th>Action</th>

        			</tr>
        		</thead>
        		<tbody>
        			@forelse($orders as $p)
        			<tr>
        				<td>{{ $p->user->name??'' }}</td>
        				<td>{{ number_format($p->total_amount,2) }}</td>
        				<td>
                            {{-- {{ $p->paymentInfo }} --}}
                            @if($p->paymentInfo)
                                {{ $p->paymentInfo->status }}
                            @else
                                Not Paid
                            @endif            
                        </td>
        				<td>{{ $p->created_at->diffForHumans() }}</td>
        				<td>
        					<div class="btn-group">
        						<a href="{{ route('admin.order.show',$p->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="#" class="btn btn-sm btn-warning">Invoice</a>
        					</div>
        				</td>
        			</tr>
        			@empty

        			@endforelse
        		</tbody>
        	</table>
            <div class="pull-5">
                {{ $orders->links() }}
            </div>
        </div>
      </div>
    </section>
</div>
@endsection

@push('script')

@endpush