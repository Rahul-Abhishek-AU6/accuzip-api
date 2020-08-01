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
               <h3>Add New Address</h3>               
               <h5>ADDRESS</h5>               
               <div class="nxjisi"><a href="#" class="abx-xklop">Back</a>  <a href="#" class="abx-xklop hsdii">Save Address</a></div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('script')

@endpush