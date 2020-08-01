@extends('layouts.common')

@push('style')

@endpush

@section('content')

<section class=" sldr">
    <img src="{{ url('') }}/web/images/galler-banner.png" class="" alt="Slider  ">
    <div class="marketing-maters">
    <h2>MARKETING POSTCARD DESIGN GALLERY</h2>

    <p>OUR TEAM KNOWS HOW TO MAKE YOU STAND OUT FROM THE PACK</p>
    <ul class="m-m">
        <span><a href="#">Home / </a></span>
        <span><a href="#"> Marketing-Materials </a></span>
        <span><a href="#">/ Gallery</a></span>
    </ul>
</div>
<section>
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 col-sm-10 col-12">
            <div class="bncsd">
                <span><a href="#"><img src="{{ url('') }}/web/images/discount.png" class="" alt="discount"> Special Offers</a></span>
                     <span><a href="#" style="background: #2a3472;"><img src="{{ url('') }}/web/images/edit-pen.png" class="" alt="edit-pen"> Special Offers</a></span>
                     <h2>UNIQUE DESIGNS SELL MORE, IT'S A FACT</h2>
                     <h4>WE COMBINE <span class="art">ORIGINAL HIGH QUALITY ART</span> WITH PROVEN SALES MESSAGING</h4>
                     <hr>
                     <p>Below are just some of our most popular categories of marketing postcards. Feeling Creative? Use our free online design tool <span class="need">Need expert help? Contact Us</span></p>

            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</section>





<section class="prnt-mrkt">
    <div class="container">
      <!--   <h1>OFFICE STATIONERY FOR YOUR BUSINESS</h1> -->
        <div class="row">
            <div class="col-md-4 col-sm-4 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="#">Dental</a></h2>
                    <img src="{{ url('') }}/web/images/gallery-1.png" class="" alt="Slider  ">
                    <a href="#" class="get-start">Get Started</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="#">Restaurants</a></h2>
                    <img src="{{ url('') }}/web/images/gallery-2.png" class="" alt="Slider  ">
                    <a href="#" class="get-start">Get Started</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="#">Landscaping</a></h2>
                    <img src="{{ url('') }}/web/images/gallery-3.png" class="" alt="Slider  ">
                     <a href="#" class="get-start">Get Started</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-4 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="#"> Chiropractic</a></h2>
                    <img src="{{ url('') }}/web/images/gallery-4.png" class="" alt="Slider  ">
                    <a href="#" class="get-start">Get Started</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="#">Realty</a></h2>
                    <img src="{{ url('') }}/web/images/gallery-5.png" class="" alt="Slider  ">
                    <a href="#" class="get-start">Get Started</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="#">Churches</a></h2>
                    <img src="{{ url('') }}/web/images/gallery-6.png" class="" alt="Slider  ">
                     <a href="#" class="get-start">Get Started</a>
                </div>
            </div>
        </div>


         <div class="row">
            <div class="col-md-4 col-sm-4 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="#"> Chiropractic</a></h2>
                    <img src="{{ url('') }}/web/images/gallery-7.png" class="" alt="Slider  ">
                    <a href="#" class="get-start">Get Started</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="#">Finance + Mortgages</a></h2>
                    <img src="{{ url('') }}/web/images/gallery-6.png" class="" alt="Slider  ">
                    <a href="#" class="get-start">Get Started</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-12">
                <div class="mrkt-box new-mrkt-box">
                    <h2><a href="#">Business to Business</a></h2>
                    <img src="{{ url('') }}/web/images/gallery-6.png" class="" alt="Slider  ">
                     <a href="#" class="get-start">Get Started</a>
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
            <h2 style="text-transform: uppercase;">Why the Right Design Matters</h2>
            <p>Having the right design with messaging that engages your customer is critical to getting the response you depend on. Our professionally custom designed artwork takes into account all of the factors necessary for an effective direct mail marketing postcard to succeed. Don’t trust your business to a friend or relative that thinks they “know Photoshop”. Our designers went to top art design schools, then spent over 20 years perfecting their craft. They understand not only what motivates your customers to respond they also understand the technical requirements a design must have for accurate printing and compliance with the postal system. Feeling creative, use our professionally inspired design templates as a starting point for your design and be certain your direct mail postcard will have the impact you want.</p>
        </div>
    </div>
</div>
</section>

@endsection

@push('script')

@endpush