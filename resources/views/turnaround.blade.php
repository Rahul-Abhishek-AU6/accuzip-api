@extends('layouts.common')

@push('style')

@endpush

@section('content')
<section class=" sldr">
   <img src="{{ url('') }}/web/images/direct-mail.png" class="" alt="Slider  ">
   <div class="marketing-maters">
      <h2>FAST TURNAROUND</h2>
      <p>We begin as soon as we receive your order,
         with the fastest standard shipping times.
      </p>
      <ul class="m-m nhj">
         <span><a href="#">Home / </a></span>
         <span><a href="#">Turnaround  </a></span>
      </ul>
   </div>
</section>
<section class="prnt-mrkt new-turn-arounsd">
   <div class="container">
      <h1>TURNAROUND</h1>
      <div class="row">
         <div class="col-md-4 col-sm-4 col-12">
            <div class="nabh-ahskl-ass">
               <h2><a href="#"> Next Day Turnaround  </a></h2>
               <p style="margin-top: 0px;">
                  Approved + ready to
                  Print by 9:00 am EST
               </p>
               <img src="{{ url('') }}/web/images/turn-around-1.png" class="" alt="Slider  ">
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="nabh-ahskl-ass">
               <h2><a href="#"> 2 Days Turnaround</a></h2>
               <p style="margin-top: 0px;">Approved + ready to
                  Print by 12:00 pm EST
               </p>
               <img src="{{ url('') }}/web/images/turn-around-2.png" class="" alt="Slider  ">
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="nabh-ahskl-ass">
               <h2><a href="#">2-4 Days Turnaround</a></h2>
               <p style="margin-top: 0px;">Approved + ready to
                  Print by 12:00 pm EST
               </p>
               <img src="{{ url('') }}/web/images/turn-around-3.png" class="" alt="Slider  ">
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('script')

@endpush