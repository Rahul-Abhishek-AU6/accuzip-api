@extends('layouts.common')

@push('style')

@endpush

@section('content')
<section class="invoice__print mb-5">
        <div class=" container">
            <div class="prints my-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Order #10000{{ $data->id }} (The order conformation has been sent)
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <table class="table table__border border-0">

                                        <tbody>
                                            <tr>
                                                <td>Order Date</td>
                                                <td>
                                                    <strong>{{ $data->created_at->format('d M Y') }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Order Status</td>
                                                <td>
                                                    <strong>Processing</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Purchased From</td>
                                                <td>
                                                    <strong class="d-block">Rush Print NYC Website</strong>
                                                    
                                                </td>
                                            </tr>
                                            {{-- <tr>
                                                <td>Placed from IP</td>
                                                <td>
                                                    <strong>516.292.1506</strong>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Account Information
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <table class="table table__border border-0">
                                        <tbody>
                                            <tr>
                                                <td>Customer Name</td>
                                                <td>
                                                    <strong>{{ $data->user->name??'' }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    <strong>{{ $data->user->email??'' }}</strong>
                                                </td>
                                            </tr>

                                            {{-- <tr>
                                                <td>Customer Group</td>
                                                <td>
                                                    <strong>Gerneral</strong>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                @if($data->order_type == 'NORMAL')
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Billing Address
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <table class="table table__border border-0">

                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td>
                                                    <strong>{{ $data->billingAddress->name??'' }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    <strong>{{ $data->billingAddress->email??'' }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Company</td>
                                                <td>
                                                    <strong>{{ $data->billingAddress->company??'' }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>
                                                    <strong>{{ $data->billingAddress->address??'' }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>City</td>
                                                <td>
                                                    <strong>{{ $data->billingAddress->city??'' }}</strong>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Shipping Address
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <table class="table table__border border-0">

                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td>
                                                    <strong>{{ $data->shippingAddress->name??'' }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    <strong>{{ $data->shippingAddress->email??'' }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Company</td>
                                                <td>
                                                    <strong>{{ $data->shippingAddress->company??'' }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>
                                                    <strong>{{ $data->shippingAddress->address??'' }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>City</td>
                                                <td>
                                                    <strong>{{ $data->shippingAddress->city??'' }}</strong>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Payment Info
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
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
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Order Detail
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>Order Type: {{ $data->order_type }}</p>
                                    {{-- <p><a href="{{ url('storage/'.$data->accuzip_file) }}">Mailing List (CSV download)</a></p> --}}
                                    <p>Mail Format: {{ $data->mail_formate }}</p>
                                    <p>Design Option: {{ (($data->design)?'Artwork uploaded':'Professional Design Service($150)') }}</p>
                                    {{-- <p><a href="{{ url('storage/'.$data->design) }}">Artwork</a></p> --}}
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @if($data->order_type == 'NORMAL')
            <div class="print__invoice">
                <div class=" header">
                    <h1 class="print_heading">ITEMS</h1>
                    
                </div>
                <main>
                	<table class="print__table  mt-5">
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
			              <tr>
			              	<th colspan="5">Data not found</th>
			              </tr>
			              @endforelse           
			            </tbody>
			         </table> 
                    
                </main>
                <div class="footer">
                    Invoice was created on a computer and is valid without the signature and seal.
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection

@push('script')

@endpush