@extends('layouts.common')

@push('meta')
<title>{{ $post->seo_title??'Rusprintnyc post' }}</title>

<meta name="description" content="{{ $post->meta_description??'' }}">

<meta name="keywords" content="{{ $post->meta_keywords??'' }}">
@endpush

@push('style')

@endpush

@section('content')
<section class="blo-ad">
   <div class="container">
      <div class="fliasjhdc">
         <h2>BLOG Detail</h2>
         <ul class="m-m gghjz">
            <span><a href="#">Home /</a></span>
            <span><a href="#">Blog-Detail</a></span>
         </ul>
      </div>
      <div class="row">
         <div class="col-md-8 col-sm-8 col-12">
            <img src="{{ url('storage/'.$post->image) }}" class="" alt="Slider">
            <div class="masi-sdf">
               <h4>{{ $post->created_at->format('M d, Y') }}</h4>
               <h2>{{ $post->title }}</h2>
               {!! $post->body !!}
               <p>posted by: <span class="rugged">{{ $post->admin->name??'' }}</span></p>
               <ul class="unisyu">
                  <li class="bnm-a"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li class="bnm-b"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li class="bnm-c"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li class="bnm-d"><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-1"></div>
         <div class="col-md-3 col-sm-3 col-12">
            <div class="searchbar">
               <input class="search_input" type="text" name="" placeholder="Search...">
               <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
            </div>
            <div class="cate-one">
               <h3>Categories</h3>
               <ul>
                  @forelse(App\Post::all()->pluck('category')->unique() as $pc)
                  <li><a href="#">{{ $pc }}</a></li>
                  @empty

                  @endforelse
                  
               </ul>
            </div>
            {{-- <div class="cate-one">
               <h3>Archives</h3>
               <ul>
                  <li><a href="#">January 2018</a></li>
                  <li><a href="#">March 2018</a></li>
                  <li><a href="#">April 2018</a></li>
               </ul>
            </div> --}}
            <div class="cate-one">
               <h3>Recent Posts</h3>
               <ul>
                  @forelse(App\Post::limit(5)->get() as $rcp)
                  <li class="shja"><a href="{{ route('web.blog.show',$rcp->slug) }}">{{ $rcp->title }}</a></li>
                  @empty

                  @endforelse
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('script')

@endpush