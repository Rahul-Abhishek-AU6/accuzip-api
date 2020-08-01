@extends('layouts.common')

@push('meta')
<title>thank you</title>


@endpush

@push('style')

@endpush

@section('content')
<section class="inner thankYou position-relative">
    <img src="{{ url('') }}/web/images/thankbg.png" class="w-100" alt="">
    <div class="inner-container">
        <div class="container">
            <img class="mb-4 wow jello" src="{{ url('') }}/web/images/verified_user.png" alt="">
            <h1 class="wow flipInX">Thank You!</h1>
            <h5 class="wow fadeInUp">Your Submission is Received and we will Contact you soon.</h5>
        </div>
    </div>
</section>
@endsection

@push('script')

@endpush