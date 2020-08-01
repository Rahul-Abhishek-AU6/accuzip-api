@extends('layouts.common')


@push('meta')
<title>Rusprintnyc blog</title>

<meta name="description" content="">

<meta name="keywords" content="">
@endpush

@push('style')

@endpush

@section('content')
<section class="blo-ad">
   <div class="container">
      <div class="fliasjhdc">
         <h2>BLOG</h2>
         <ul class="m-m gghjz">
            <span><a href="#">Home /</a></span>
            <span><a href="#">Blog</a></span>
         </ul>
      </div>
      <div class="row">
         <div class="col-md-6 col-sm-6 col-12">
            <img src="{{ url('storage/'.$singlTop->image) }}" class="" alt="Slider">
         </div>
         <div class="col-md-6 col-sm-6 col-12">
            <div class="masi-sdf">
               <h4>{{ $singlTop->category }}</h4>
               <h2>{{ $singlTop->title }}</h2>
               <p>{{ $singlTop->excepts }}</p>
               <a href="{{ route('web.blog.show',$singlTop->slug) }}" class="blo-sal">More</a>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div id="our-services" class="our-services">
      <!-- Features -->
      <div class="features  mb-4">
         <div class="container">
            <div class="row">
               @forelse($seconThree as $scf)
               <div class="feature py-4 col-md-4 d-flex">
                  <div class="icon text-green "><img src="{{ url('storage/'.$scf->image) }}" class="" alt="one" width="120" height="130"></div>
                  <div class="new-ahsj">
                     <h4>{{ $scf->category }}</h4>
                     <h3><a href="{{ route('web.blog.show',$scf->slug) }}">{{ $scf->title }}</a></h3>
                     <h6>By: {{ $scf->admin->name??'' }}</h6>
                  </div>
               </div>
               @empty

               @endforelse
            </div>
         </div>
      </div>
      <!-- / Features -->
   </div>
</section>
<section class="all-soi">
   <div class="container bkloosp">
      <h2>Product Help</h2>
      <div class="row">
         @forelse($productHelp as $ph)
         <div class="col-md-3 col-sm-3 col-12">
            <div class="newbox-sss">
               <img src="{{ url('storage/'.$ph->image) }}" width="276" height="280" class="" alt="one">
               <h4>{{ $ph->category }}</h4>
               <h3><a href="{{ route('web.blog.show',$ph->slug) }}">{{ $ph->title }}</a></h3>
               <h6>By {{ $ph->admin->name??'' }}</h6>
            </div>
         </div>
         @empty

         @endforelse
      </div>
   </div>
</section>
<section class="all-soi">
   <div class="container bkloosp">
      <h2>Artwork Help</h2>
      <div class="row">
        @forelse($artWorkHelp as $ph)
         <div class="col-md-3 col-sm-3 col-12">
            <div class="newbox-sss">
               <img src="{{ url('storage/'.$ph->image) }}" width="276" height="280" class="" alt="one">
               <h4>{{ $ph->category }}</h4>
               <h3><a href="{{ route('web.blog.show',$ph->slug) }}">{{ $ph->title }}</a></h3>
               <h6>By {{ $ph->admin->name??'' }}</h6>
            </div>
         </div>
         @empty

         @endforelse
         
      </div>
   </div>
</section>
<section class="all-soi">
   <div class="container bkloosp">
      <h2>Helloacademy</h2>
      <div class="row">
         @forelse($helloAcademy as $ph)
         <div class="col-md-3 col-sm-3 col-12">
            <div class="newbox-sss">
               <img src="{{ url('storage/'.$ph->image) }}" width="276" height="280" class="" alt="one">
               <h4>{{ $ph->category }}</h4>
               <h3><a href="{{ route('web.blog.show',$ph->slug) }}">{{ $ph->title }}</a></h3>
               <h6>By {{ $ph->admin->name??'' }}</h6>
            </div>
         </div>
         @empty

         @endforelse
         
      </div>
   </div>
</section>
<section class="popu-arty">
   <div id="our-services" class="our-services">
      <!-- Features -->
      <div class="features  mb-4">
         <div class="container">
            <h2>Popular articles</h2>
            <div class="row">
               @forelse($popularArticle as $pa)
               <div class="feature py-4 col-md-4 d-flex">
                  <div class="icon text-green "><img width="127" height="114" src="{{ url('storage/'.$pa->image) }}" class="" alt="one"></div>
                  <div class="new-ahsj">
                     <h4>{{ $pa->category }}</h4>
                     <h3><a href="{{ route('web.blog.show',$pa->slug) }}">{{ $pa->title }}</a></h3>
                  </div>
               </div>
               @empty

               @endforelse
            </div>
            
         </div>
      </div>
      <!-- / Features -->
   </div>
</section>
@endsection

@push('script')

@endpush