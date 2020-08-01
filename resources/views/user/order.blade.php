@extends('layouts.common')

@push('style')

@endpush

@section('content')
<section class="blo-ad">
   <div class="container">
      <div class="fliasjhdc">
      </div>
      <div class="row">
         @include('components.user-menu')
         <div class="col-md-9 col-sm-12 col-12">
            <div class="dash-board-bxc">
               <h3>My Order</h3>
               <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Shipping Amount</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Payment Status</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($data as $dt)
                      <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>N/A</td>
                        <td>{{ $dt->shipping }}</td>
                        <td>{{ number_format($dt->total_amount,2) }}</td>
                        <td>{{ $dt->created_at->diffForHumans() }}</td>
                        <td>{{ $dt->paymentInfo->status??'N/A' }}</td>
                        <td>
                          <div class="btn btn-group">
                            <a href="{{ route('web.order.view',$dt->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="#" class="btn btn-sm btn-warning">Invoice</a>
                          </div>
                        </td>
                      </tr>  
                      @empty

                      @endforelse                    
                    </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('script')

@endpush