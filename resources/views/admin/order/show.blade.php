@extends('admin.layout.common')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
            	{{-- <a href="{{ route('admin.posts.edit',$post->slug) }}" class="btn btn-success btn-sm">Edit-Post</a> --}}
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Order</li>
              <li class="breadcrumb-item active">show</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="row">
        <div class="col-md-{{ (($data->order_type == 'EDDM')?4:6) }}">
            <p>Customer Name: {{ $data->user->name??'' }}</p>
            <p>Total Amount: ${{ number_format($data->total_amount,2) }}</p>
            <p>Sub total: ${{ number_format($data->sub_amount,2) }}</p>
            @php
              $shipping = $data->total_amount-$data->sub_amount;
            @endphp
            <p>Shipping Charge: ${{ number_format($shipping,2) }}</p>
        </div>
        <div class="col-md-{{ (($data->order_type == 'EDDM')?4:6) }}">
          @php
            $pay = $data->paymentInfo;
          @endphp
          @if($pay)
          <p>TranID: {{ $pay->tran_id }}</p>
          <p>Status: {{ $pay->status }}</p>
          <p>Amount: {{ $pay->amount }}</p>

          @else
          <p>Not Paid</p>
          @endif
        </div>
        @if($data->order_type == 'EDDM' || $data->order_type == 'DIRECT_MAIL' || $data->order_type == 'OWNLIST')
          <div class="col-md-4">
            
            
            <p>Order Type: {{ $data->order_type }}</p>
            <p><a href="{{ url('storage/'.$data->accuzip_file) }}">Mailing List (CSV download)</a></p>
            <p>Mail Format: {{ $data->mail_formate }}</p>
            <p>Design Option: {{ (($data->design)?'Artwork uploaded':'Professional Design Service($150)') }}</p>
            @if($data->design)
            <p><a href="{{ url('storage/'.$data->design) }}">Download Artwork</a></p>
            @endif

            
          </div>
        @endif
        @if($data->order_type == 'NORMAL')
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Qty</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>

              @forelse($data->cartData as $d)
              @php
                $attr = json_decode($d->row_data)->attributes;
              @endphp
              <tr>
                <th>{{ $loop->index+1 }}</th>
                <td>{{ $d->name }}</td>
                <td><img src="{{ url('storage/'.$attr->image) }}" width="100" height="100"></td>
                <td>{{ $d->qty }}</td>
                <td>${{ number_format($d->amount,2) }}</td>
              </tr>   
              @empty

              @endforelse           
            </tbody>
          </table> 
        </div>
        @endif
      </div>
    </section>
</div>
@endsection

@push('script')

@endpush