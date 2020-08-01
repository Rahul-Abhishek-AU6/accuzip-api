@extends('layouts.common')

@push('style')

@endpush

@section('content')

<section class="sldr overview__inner  position-relative mb-4">
   <img src="{{ url('') }}/web/images/special-offer.png" class="w-100" alt="Slider  ">
   <div class="position-absolute text-white d-flex justify-content-center align-items-center flex-column">
      <h2>SPECIAL OFFERS</h2>
   </div>
</section>

<section class="main-time">
   <div class="container">
      <h1>DIRECT MAIL MARKETING: COMPLETE PACKAGES</h1>
      <p class="iddnk">Our packages include: DESIGN, MAIL LIST, ADDRESSING, PRINT AND MAIL SERVICES</p>
      <div class="row">
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk">
               <h2>4" x 6" Postcard</h2>
               <div><img src="{{ url('') }}/web/images/spl-1.png" class="" alt="Slider  "></div>
               <a href="#">&nbsp;</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk nshk">
               <h2>6" x 9" Postcard</h2>
               <div><img src="{{ url('') }}/web/images/spl-1.png" class="" alt="Slider  "></div>
               <a href="#">&nbsp;</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk ghrtt">
               <h2>4" x 6" Postcard</h2>
               <div><img src="{{ url('') }}/web/images/spl-1.png" class="" alt="Slider  "></div>
               <a href="#">&nbsp;</a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk">
               <p>One time mailing to 5,000 residences</p>
               <h3>$625</h3>
               <p>Plus 22¢ per piece for estimated delivery + postage</p>
               <a href="#">5,000 Cards</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk nshk">
               <p>One time mailing to 5,000 residences</p>
               <h3>$875</h3>
               <p>Plus 22¢ per piece for estimated
                  delivery + postage
               </p>
               <a href="#">5,000 Cards</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk ghrtt">
               <p>One time mailing to 5,000 residences</p>
               <h3>$1,025</h3>
               <p>Plus 22¢ per piece for estimated
                  delivery + postage
               </p>
               <a href="#">5,000 Cards</a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk">
               <p>5,000 mailed per month for 3 months to the same list of 5,000 residences</p>
               <h3>$1,395</h3>
               <p>Plus 22¢ per piece for estimated delivery + postage </p>
               <a href="#">15,000 Cards</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk nshk">
               <p>5,000 mailed per month for 3 months to the same list of 5,000 residences</p>
               <h3>$1,775</h3>
               <p>Plus 22¢ per piece for estimated delivery + postage</p>
               <a href="#">15,000 Cards</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk ghrtt">
               <p>5,000 mailed per month for 3 months to the same list of 5,000 residences</p>
               <h3>$2,210</h3>
               <p>Plus 22¢ per piece for estimated delivery + postage</p>
               <a href="#">15,000 Cards</a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk">
               <p>10,000 mailed per month for 3 months to the same list of 10,000 residences</p>
               <h3>$1,995</h3>
               <p>Plus 22¢ per piece for estimated delivery + postage</p>
               <a href="#">30,000 Cards</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk nshk">
               <p>10,000 mailed per month for 3 months to the same list of 10,000 residences</p>
               <h3>$2,599</h3>
               <p>Plus 22¢ per piece for estimated delivery + postage</p>
               <a href="#">30,000 Cards</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-12">
            <div class="spals-ocsk ghrtt">
               <p>10,000 mailed per month for 3 months to the same list of 10,000 residences</p>
               <h3>$3,399</h3>
               <p>Plus 22¢ per piece for estimated delivery + postage</p>
               <a href="#">30,000 Cards</a>
            </div>
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
<section class="Buying Custom">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2 style="text-transform: uppercase;">All Inclusive Prices</h2>
            <p>RushPrintNYC.com offers the best direct mail campaign packages no matter what your budget. We include everything you need to run a successful direct mail campaign for one low price. Our direct mail postcard packages offer small businesses a great return on investment, and have proven time and time again to help increase sales. These packages are just an example of the low prices we offer, don't see what your looking for? Please contact us for the best pricing and package to fit your direct mail needs. We are a direct manufacturer of direct mail and will offer you the best value and pricing available anywhere..</p>
         </div>
      </div>
   </div>
</section>

@endsection

@push('script')

@endpush