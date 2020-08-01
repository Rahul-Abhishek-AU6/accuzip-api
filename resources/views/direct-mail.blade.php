@extends('layouts.common')

@push('meta')
<title>Direct Mail Advertising in NYC| Direct Mail Postcards Design</title>

<meta name="description" content="Get direct mail design and mailing services at Rushprint. It is the best direct mail company and offers direct mail campaign services in NYC.">

<meta name="keywords" content="direct mail advertising, direct mail company, direct mail nj, direct mail of maine, direct mail new jersey, direct mail virginia, direct mail washington dc, direct mail new York, direct mail services virginia, direct mail marketing virginia, direct mail services washington dc, direct mail marketing washington dc">
@endpush

@push('style')

@endpush

@section('content')
<section class=" sldr">
   <img src="{{ url('/') }}/web/images/direct-mail.png" class="" alt="Slider  ">
   <div class="marketing-maters">
      <h2>OUR DIRECT MAIL WORKS</h2>
      <p>FIND OUT WHY MORE BUSINESSES USE US TO PROMOTE THEIR PASSION</p>
      {{-- <ul class="m-m nhj">
         <span><a href="#">Home / </a></span>
         <span><a href="#">Direct Mail  </a></span>
      </ul> --}}
   </div>
</section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-10 col-sm-10 col-12">
            <div class="bncsd">
               <span><a href="#" style="background: #0117b8;"><img src="{{ url('/') }}/web/images/d-sn.png" class="" alt="discount"> Design Gallery</a></span>
               <span><a href="{{ route('web.special.offers') }}"><img src="{{ url('/') }}/web/images/discount.png" class="" alt="discount"> Special Offers</a></span>
               <span><a href="{{ route('web.special.offers') }}" style="background: #2a3472;"><img src="{{ url('/') }}/web/images/edit-pen.png" class="" alt="edit-pen"> Special Offers</a></span>
               <h2>CUSTOM DIRECT MAIL DESIGNS THAT SELL</h2>
               <!-- <h4>WE COMBINE <span class="art">ORIGINAL HIGH QUALITY ART</span> WITH PROVEN SALES MESSAGING</h4> -->
               <p>LET US PUT <span class="yrts-prtnt">20 YEARS OF PRINT DESIGN AND MARKETING EXPERIENCE</span> TO WORK FOR YOU
                  Call Today and Let's Talk About Your Goals. It Will Be The Most Productive 15 Minutes Of Your Day
               </p>
               <img src="{{ url('/') }}/web/images/poco.png" class="poco" alt="discount">
            </div>
         </div>
         <div class="col-md-1"></div>
      </div>
   </div>
</section>
<section class="site-wrapper">
   <div class="container">
      <h2>THE RUSHPRINTNYC.COM DIFFERENCE</h2>
      <div class="row">
         <div class="vido">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/196000672" width="640" height="360" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
   </div>
</section>
<section class="cnt-today">
   <div class="container">
      <h2>CONTACT US TODAY! 516.292.1506</h2>
      <p>Or send us the details below and we will reach out to you with 2 hours During business hours</p>
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-10 col-sm-10 col-12">
            <div class="row">
               <div class="col-md-8">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Name *</label>
                           <input type="text" name="txtName" class="form-control"  value="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Company Name *</label>
                           <input type="text" name="txtEmail" class="form-control" value="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Email *</label>
                           <input type="text" name="txtEmail" class="form-control" value="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Phone Number *</label>
                           <input type="text" name="txtEmail" class="form-control" value="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Preferred Method Of Contact</label><br>
                           <div class="form-check-inline">
                              <label class="customradio">
                              <input type="radio" checked="checked" name="radio">
                              <span class="radiotextsty">Email</span>
                              <span class="checkmark"></span>
                              </label>        
                              <label class="customradio">
                              <input type="radio" name="radio">
                              <span class="radiotextsty">Telephone</span>
                              <span class="checkmark"></span>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Project Due Date</label>
                           <input type="text" name="txtEmail" class="form-control" value="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Project Details</label>
                     <textarea name="txtMsg" class="form-control"  style="width: 100%; height: 230px;"></textarea>
                  </div>
               </div>
               <span class="new-sdh"><a href="#" class="get-start ">Submit Now!</a></span>
            </div>
         </div>
         <div class="col-md-1"></div>
      </div>
   </div>
</section>
<section class="main-step">
   <div class="container">
      <div class="row">
         <div class="bncsd">
            <h6>STEP TWO:</h6>
            <h2 style="padding:15px 0 5px;">VERIFIED DIRECT MAILING LISTS</h2>
            <p><span class="actuyu">This is actually the most important step,</span> but flashy designs are cooler than numbers so...
               we got bumped to step two, told you it pays to look good.
               By understanding your unique marketing needs we build you a list that performs!
            </p>
         </div>
      </div>
      <div class="row manycxv">
         <div class="col-md-6 col-sm-6 col-12">
            <img src="{{ url('/') }}/web/images/list-all.png" class="" alt="cro">
         </div>
         <div class="col-md-6 col-sm-6 col-12">
            <p>Most clients don’t have their own data or even know
               where to begin. Let us help you to build the right list for
               your needs. We get the best data available based on
               your industry and specific marketing criteria.
            </p>
         </div>
      </div>
   </div>
</section>
<section class="popu-paty">
   <div class="container">
      <h2>Some of Our Most Popular List Types:</h2>
      <div class="row">
         <div class="col-md-4 col-sm-4 col-12">
            <div class="home-size-box">
               <h5>Consumer Lists Specific to:</h5>
               <ul>
                  <li>Age</li>
                  <li>Birth Date</li>
                  <li>Income</li>
                  <li>Gender</li>
                  <li>Marital Status</li>
                  <li>Presence of Children</li>
                  <li>Age of Children</li>
                  <li>Dwelling Type</li>
                  <li>Owns or Rents</li>
                  <li>Home Value</li>
                  <li>Lot Size</li>
               </ul>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="home-size-box">
               <h5>Business Lists Specific to:</h5>
               <ul>
                  <li>Industry Type</li>
                  <li>Industry Category</li>
                  <li>SIC Codes</li>
                  <li>Executive Contacts</li>
                  <li>Executive Titles</li>
                  <li>Employee Size</li>
                  <li>Sales Volume</li>
                  <li>Contact Gender</li>
                  <li>Corporate HQ</li>
                  <li>Branch Locations</li>
               </ul>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="home-size-box">
               <h5>Occupant Lists Specific to:</h5>
               <ul>
                  <li>Radius by Mile</li>
                  <li>Radius by Drive Time</li>
                  <li>Postal Carrier Routes</li>
                  <li>Zip Codes</li>
                  <li>Cities</li>
                  <li>Country</li>
                  <li>States</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="shm-ty-sw">
   <div class="container">
      <h2>Some of Our Most Popular List Types:</h2>
      <div class="row manycxv">
         <div class="col-md-6 col-sm-6 col-12">
            <img src="{{ url('/') }}/web/images/lcd.png" class="" alt="cro">
         </div>
         <div class="col-md-6 col-sm-6 col-12">
            <p>Curious to see how many customers fit your criteria? Use our online mail list tool List Locator™ to find out. List Locator™ combines your geography specifications and your unique list criteria then searches 100’s of millions of verified records from industry respected data bases to build the perfect mail list for your goals.</p>
         </div>
      </div>
   </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-10 col-sm-10 col-12">
            <div class="bncsd">
               <h6>STEP THREE</h6>
               <h2  style="padding:15px 0 5px;">HIGH QUALITY DIRECT MAILER PRINTING</h2>
               <img src="{{ url('/') }}/web/images/bundel.png" class="poco" alt="discount">
            </div>
         </div>
         <div class="col-md-1"></div>
      </div>
   </div>
</section>
@endsection

@push('script')

@endpush