@extends('layouts.common')

@push('style')
<link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
<script src="{{ asset('web/js/modernizr.js') }}"></script>
@endpush

@section('content')
<main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
        <div class="cd-tab-filter">
            <ul class="cd-filters">
               {{--  <li class="placeholder">
                    <a data-type="all" href="#0">All</a>
                    <!-- selected option on mobile -->
                </li>
                <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
                <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Blue</a></li>
                <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Green</a></li> --}}
            </ul>
            <!-- cd-filters -->
        </div>
        <!-- cd-tab-filter -->
    </div>
    <!-- cd-tab-filter-wrapper -->

    <section class="cd-gallery">
        <ul>
            @forelse($data as $d)
            <li class="mix color-1 check1 radio2 option3">
                <img src="{{ url('storage/'.$d->images->first()->image) }}" alt="Image 1">
                <h5 class="text-center"><a href="{{ route('web.upload.design',$d->slug) }}">{{ $d->name }} 
                    <span class="d-block">For RACK CARDS <br>
                        {{-- Size: 4" W X 9" H --}}
                    </span></a>
                </h5>
            </li>
            @empty
                {{-- <div class="cd-fail-message">No results found</div> --}}
            @endforelse
            
            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
        </ul>
        <div class="cd-fail-message">No results found</div>
    </section>
    <!-- cd-gallery -->

    <div class="cd-filter">
        <form>
            <div class="cd-filter-block">
                <h4>Search</h4>

                <div class="cd-filter-content">
                    <input type="search" placeholder="Try color-1...">
                </div>
                <!-- cd-filter-content -->
            </div>
            <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Products</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                        <label class="checkbox-label" for="checkbox1">BUSINESS CARDS</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                        <label class="checkbox-label" for="checkbox2">RACK CARDS (4)</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                        <label class="checkbox-label" for="checkbox3">Plan Card</label>
                    </li>
                </ul>
                <!-- cd-filter-content -->
            </div>
            <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Sort By</h4>

                <div class="cd-filter-content">
                    <div class="cd-select cd-filters">
                        <select class="filter" name="selectThis" id="selectThis">
							<option value="">Choose an option</option>
							<option value=".option1">Popularity</option>
							<option value=".option2">Name</option>
							<option value=".option3">Price</option>
							<option value=".option4">Size</option>
						</select>
                    </div>
                    <!-- cd-select -->
                </div>
                <!-- cd-filter-content -->
            </div>
            <!-- cd-filter-block -->

            {{-- <div class="cd-filter-block">
                <h4>Topic</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                        <label class="radio-label" for="radio1">All</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                        <label class="radio-label" for="radio2">Chiropractic (3)</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
                        <label class="radio-label" for="radio3">Dental (3)</label>
                    </li>
                </ul>
                <!-- cd-filter-content -->
            </div> --}}
            <!-- cd-filter-block -->
        </form>

        <a href="#0" class="cd-close">Close</a>
    </div>
    <!-- cd-filter -->

    <a href="#0" class="cd-filter-trigger">Filters</a>
</main>

@endsection

@push('script')
<script src="{{ asset('web/js/jquery.mixitup.min.js') }}"></script>
@endpush