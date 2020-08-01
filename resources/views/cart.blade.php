@extends('layouts.common')

@push('style')

@endpush

@section('content')
<section>
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12 vcfgml-ijh">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>Product Name</th>
                     <th>Quantity</th>
                     <th class="text-center">Price</th>
                     <th class="text-center">Total</th>
                     <th> </th>
                  </tr>
               </thead>
               <tbody>
               	 @forelse(Cart::getContent() as $c)
                  <tr>
                     <td class="col-sm-8 col-md-6">
                        <div class="media">
                           <a class="thumbnail pull-left" href="#"> <img src="{{ url('storage/'.$c->attributes->image) }}" class="" alt="cro" width="200" height="200"> </a>
                           <div class="media-body">
                              <h4 class="media-heading"><a href="#">{{ $c->name }}</a></h4>
                              <h5 class="media-heading"> <a href="#"><span class="sz-nbm">Size</span> {{ $c->attributes->size }}</a></h5>
                              <h5 class="media-heading"><a href="#"><span class="sz-nbm">Paper stock</span>{{ $c->attributes->paper_stock }}</a></h5>
                              <h5 class="media-heading"><a href="#"><span class="sz-nbm">Format</span>{{ $c->attributes->formate }}</a></h5>
                              <h5 class="media-heading"><a href="#"><span class="sz-nbm">Finish</span>{{ $c->attributes->finish }}</a></h5>
                              <h5 class="media-heading">
                                 <a href="#">
                                    <span class="sz-nbm">Quantity</span>{{ $c->attributes->quentity }}
                                  </a>
                              </h5>
                              <h5 class="media-heading"><a href="#"><span class="sz-nbm">Turnaround time</span>{{ $c->attributes->tourn_around_time }}</a></h5>
                           </div>
                        </div>
                     </td>
                     {!! Form::open(['route'=>'web.cart.update','method'=>'get','id'=>'cart-update']) !!}
                     {!! Form::hidden('id', $c->id, []) !!}
                     <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" id="cart-value-update" name="quantity" class="form-control" min="1" value="{{ $c->quantity }}">
                     </td>
                     {!! Form::close() !!}
                     <td class="col-sm-1 col-md-1 text-center"><strong>${{ $c->price }}</strong></td>
                     <td class="col-sm-1 col-md-1 text-center"><strong>${{ $c->price*$c->quantity }}</strong></td>
                     <td class="col-sm-1 col-md-1">
                        <a href="{{ route('web.cart.remove',$c->id) }}" type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span> Remove
                        </a>
                     </td>
                   </tr>
                  @empty

                  @endforelse
                  <tr>                     
                     <td colspan="4">
                        <h5 class="float-right">Subtotal</h5>
                     </td>
                     <td class="text-right">
                        <h5><strong>${{ number_format(Cart::getSubTotal(),2) }}</strong></h5>
                     </td>
                  </tr>
                  <tr>
                     
                     <td colspan="4">
                        <h5 class="float-right">Estimated shipping</h5>
                     </td>
                     <td class="text-right">
                        <h5><strong>$0.00</strong></h5>
                     </td>
                  </tr>
                  <tr>
                     
                     <td colspan="4">
                        <h3 class="float-right">Total</h3>
                     </td>
                     <td class="text-right">
                        <h3><strong>${{ number_format(Cart::getTotal(),2) }}</strong></h3>
                     </td>
                  </tr>
                  <tr>                     
                     <td colspan="4">
                        <a href="{{ route('welcome') }}" class="btn btn-warning float-right">
                        	<span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </a>
                     </td>
                     <td>
                        <a href="{{ route('web.checkout') }}?target=checkout" class="btn btn-success">
                        	Checkout <span class="glyphicon glyphicon-play"></span>
                        </a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</section>
@endsection

@push('script')
<script type="text/javascript">
	$('#cart-value-update').change(function() {
		$('form#cart-update').submit();
	})
</script>
@endpush