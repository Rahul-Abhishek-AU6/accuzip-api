@extends('layouts.common')

@push('meta')
<title>Prices and sizes</title>

<meta name="description" content="">

<meta name="keywords" content="">
@endpush

@push('style')

@endpush

@section('content')
<section class="sldr overview__inner  position-relative">
        <img src="{{ url('') }}/img/eddm-size.png" class="w-100" alt="Slider  ">
        <div class="position-absolute text-white d-flex justify-content-center align-items-center text-center flex-column">
            <h2>EDDM & DIRECT MAIL<br> SIZES & Pricing </h2>
        </div>
    </section>

    <section class="become">
        <div class="container">
            <h3 class="text-center"><small class="font-weight-bold"> We make EDDM & Direct Mail easy and profitable for your business</small></h3>
            <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">What is EDDM Mail?</h3>
            <p class="text-center price__para">EDDM is a special Post Office program which allows you to send the largest postcards possible at the cheapest postage rates available. <br> Using our powerful mapping software, you pick the postal routes in your desired area and every home on that
                route receives your postcard. <br> Simple, Cheap, and Effective.</p>
            <h5 class="text-center text-uppercase">This type of mail campaign is ideal for SATURATING AN AREA:</h5>

        </div>
    </section>




    <section class="become mailing__easy">
        <div class="container">
            <div class="become__box mb-5">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="w-auto" src="{{ url('') }}/img/4.25x11.png" alt="">
                    </div>
                    <div class="col-md-7 font-weight-bold">
                        <h4 class="mt-md-5"><a href="#0">4.25" x 11" EDDM® Postcard</a></h4>
                        <p>This cost effective postcard is designed to reduce your costs and provide great results in the mail. Commonly used for coupons and special offers.</p>
                        <ul>
                            <li> Our Most Affordable EDDM® Postcard Size </li>
                            <li> Printed on 14PT C2S Card Stock (Heavier Than Standard) </li>
                            <li>Tall Format Sticks Out in the Mail</li>
                            <li>Ideal for Coupons, Restaurant Nights, and Special Deals</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="become__box mb-5">
                <div class="row">
                    <div class="col-md-5  text-center">
                        <img class="w-auto" src="{{ url('') }}/img/Layer 15.png" alt="">
                    </div>
                    <div class="col-md-7 font-weight-bold">
                        <h4 class="mt-md-5"><a href="#0">6.25" x 9" EDDM® Postcard</a></h4>
                        <p>This popular option is used by many industries and gives you an excellent blend of size and value. Larger than standard postcards, your piece is sure to stand out when delivered and keep you on budget.</p>
                        <ul>
                            <li>Larger than Standard Postcards for High Visibility</li>
                            <li>Printed on 14PT C2S Card Stock (Heavier Than Standard)</li>
                            <li> Common Sizing Works for Most Direct Mail Needs</li>
                            <li>Perfect for Realtors, Restaurants and Retail Events</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="become__box mb-5">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="w-auto" src="{{ url('') }}/img/6.25x11.png" alt="">
                    </div>
                    <div class="col-md-7 font-weight-bold">
                        <h4 class="mt-md-5"><a href="#0">6.25" x 11" EDDM® Postcard</a></h4>
                        <p>A favorite with the auto industry, restaurants, and realtors. Perfect when you have coupons or lots of photos. Larger than all standard mail, your piece is sure to stand out when delivered.</p>
                        <ul>
                            <li>Larger than Standard Mail for Great Visibility</li>
                            <li>Printed on 14PT C2S Card Stock (Heavier Than Standard)</li>
                            <li>The Most Size For the Best Value</li>
                            <li>The #1 Choice for New Home Listings & Home Services</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="become__box mb-5">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="w-auto" src="{{ url('') }}/img/8.5x11.png" alt="">
                    </div>
                    <div class="col-md-7 font-weight-bold">
                        <h4 class="mt-md-5"><a href="#0">8.5" x 11" EDDM® Postcard</a></h4>
                        <p>The Jumbo! The Full-Pager! The Largest Postcard We Print! Nothing gets more attention, be the first thing they see when they get the mail, so big their neighbor gotta peak. </p>
                        <ul>
                            <li>No Bending Your Words Here, This Is Mailed Flat</li>
                            <li>Printed on 14PT C2S Card Stock (Heavier Than Standard)</li>
                            <li>Make Your Best Impression</li>
                            <li>Perfect For Any Business Operating During COVID-19</li>
                            <li>Makes Conveying New Information Clear & Easy</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="become__box mb-5">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="w-auto" src="{{ url('') }}/img/11x17.png" alt="">
                    </div>
                    <div class="col-md-7 font-weight-bold">
                        <h4 class="mt-md-5"><a href="#0">11" x 17" EDDM® MEnu</a></h4>
                        <p>Our menus are a natural choice for restaurants looking to bring back customers and inform them of updated COVID-19 protocols and safety measures. </p>
                        <ul>
                            <li>Tri-Folded For Customer Engagement </li>
                            <li>Printed on 100# Gloss Text (brochure quality)</li>
                            <li>Ideal For Menus</li>
                            <li>Customers Will Have New Expectations, Inform Them</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center my-4"> <a href="{{ route('how.we.work') }}" class="btn"><span>Get Started</span> </a></div>
            <div class="eddm_pricing">
                <h3 class="text-center text-dark mb-2 mt-5">EDDM PRICING</h3>
                <p class="text-center text-capitalize">Our pricing includes all printing, mail services and postage costs!</p>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">4.25” x 11” POSTCARDS
                        </h3>
                        <p>Includes Postage</p>

                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 to 2499</td>
                                    <td>.57¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.47¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.36¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.33¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.32¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">6.25” x 9”<br> POSTCARDS
                        </h3>
                        <p>Includes Postage</p>

                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 to 2499</td>
                                    <td>.57¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.42¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.36¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.33¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.32¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">6.25” x 11” <br> POSTCARDS
                        </h3>
                        <p>Includes Postage</p>

                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 to 2499</td>
                                    <td>.59¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.48¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.40¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.37¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.35¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row mt-4 justify-content-center">
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">8.5” x 11” <br> POSTCARDS
                        </h3>
                        <p>Includes Postage</p>

                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 to 2499</td>
                                    <td>.60¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.50¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.41¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.39¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.36¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">11” x 17” <br> Tri Fold Menus
                        </h3>
                        <p>Includes Postage</p>

                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 to 2499</td>
                                    <td>.69¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.50¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.45¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.42¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.39¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="tDeirect">


                    <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">What is TARGETED DIRECT Mail?</h3>
                    <p class="text-center price__para ">Targeted Direct Mail uses our advanced mapping software to pick only the specific customers that fit your criteria with laser focus. <br> Once your list is built you choose the postcard size that best fits your message. <br> Choose between
                        Presort Standard or Presort First Class postage and your message is in the mail within only 2 days. <br> Simple, Cheap, and Effective.</p>
                    <p class="text-center font-weight-bold" style="text-transform: uppercase !important;">This type of mail campaign is ideal for Targeting Specific Clients:</p>
                    <div class="become__box mb-5">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img class="w-auto" src="{{ url('') }}/img/4x6.png" alt="">
                            </div>
                            <div class="col-md-7 font-weight-bold">
                                <h4 class="mt-md-5"><a href="#0">4" x 6" Targeted Postcard</a></h4>
                                <p class="text-left">Low cost and a great option when your message is simple and your list is large. High quality printing and heavy coated card stock ensure you still look great and get noticed. </p>
                                <ul>
                                    <li>Our most economical postcard </li>
                                    <li>Printed on 14PT C2S Card Stock (Heavier Than Standard)</li>
                                    <li>Standard postcard size </li>
                                    <li>Perfect Concise Messaging or Frequent Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="become__box mb-5">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img class="w-auto" src="{{ url('') }}/img/6x9.png" alt="">
                            </div>
                            <div class="col-md-7 font-weight-bold">
                                <h4 class="mt-md-5"><a href="#0">6" x 9" Targeted Postcard</a></h4>
                                <p>Everyone’s favorite, the one that gets the job done, all day, everyday. The best combination of size and cost providing an outstanding value.
                                </p>
                                <ul>
                                    <li>Stands Out Above Most Mail </li>
                                    <li>Printed on 14PT C2S Card Stock (Heavier Than Standard)</li>
                                    <li>Large Enough For Most Applications & Messaging</li>
                                    <li>Perfect For Sales & Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="become__box mb-5">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img class="w-auto" src="{{ url('') }}/img/6x11.png" alt="">
                            </div>
                            <div class="col-md-7 font-weight-bold">
                                <h4 class="mt-md-5"><a href="#0">6" x 11" Targeted Postcard</a></h4>
                                <p class="text-left">Make the most of your image with this giant postcard. Perfect when you have coupons or lots of photos. Larger than all standard mail, your piece is sure to stand out when delivered.
                                </p>
                                <ul>
                                    <li>Larger than Standard Mail for Great Visibility</li>
                                    <li>Printed on 14PT C2S Card Stock (Heavier Than Standard)</li>
                                    <li>The Most Size For The Best Value</li>
                                    <li>The #1 Choice for New Home Listings & Home Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center my-4"> <a href="{{ route('how.we.work') }}" class="btn"><span>Get Started</span> </a></div>


            <div class="eddm_pricing">
                <h3 class="text-center text-dark mb-2 mt-5">TARGETed DIRECT MAIL PRICING</h3>
                <h3 class="text-center text-dark mb-2 font-weight-normal">WITH OUR VERIFIED MAILING LIST</h3>
                <p class="text-center">Our pricing includes custom targeted mail list, printing, mail services and postage costs!</p>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">4” x 6” POSTCARDS</h3>
                        <p>Includes Postage</p>

                        <table class="table table-2 table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                    <th scope="col">PRE-SORT FIRST CLASS PRICE/PIECE
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:250px">1 to 2499</td>
                                    <td>.65¢</td>
                                    <td style="width:250px">.65¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.53¢</td>
                                    <td>.53¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.50¢</td>
                                    <td>.50¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.47¢</td>
                                    <td>.47¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.46¢</td>
                                    <td>.46¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">6” x 9” POSTCARDS
                        </h3>
                        <p>Includes Postage</p>

                        <table class="table table-2  table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                    <th scope="col">PRE-SORT FIRST CLASS PRICE/PIECE
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:250px">1 to 2499</td>
                                    <td>.73¢</td>
                                    <td style="width:250px">.87¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.58¢</td>
                                    <td>.72¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.52¢</td>
                                    <td>.66¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.49¢</td>
                                    <td>.63¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.48¢</td>
                                    <td>.63¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">6” x 11” POSTCARDS
                        </h3>
                        <p>Includes Postage</p>

                        <table class="table table-2  table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                    <th scope="col">PRE-SORT FIRST CLASS PRICE/PIECE
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:250px">1 to 2499</td>
                                    <td>.75¢</td>
                                    <td style="width:250px">.85¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.64¢</td>
                                    <td>.78¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.56¢</td>
                                    <td>.70¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.51¢</td>
                                    <td>.65¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.50¢</td>
                                    <td>.64¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="eddm_pricing">
                <h3 class="text-center text-dark mb-2 mt-5">TARGETed DIRECT MAIL PRICING</h3>
                <h3 class="text-center text-dark mb-2 font-weight-normal">WITH YOUR MAILING LIST</h3>
                <p class="text-center">Our pricing includes printing, mail services and postage costs!</p>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">4” x 6” POSTCARDS</h3>
                        <p>Includes Postage</p>

                        <table class="table table-2 table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                    <th scope="col">PRE-SORT FIRST CLASS PRICE/PIECE
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:250px">1 to 2499</td>
                                    <td>.62¢</td>
                                    <td style="width:250px">.62¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.50¢</td>
                                    <td>.50¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.47¢</td>
                                    <td>.47¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.44¢</td>
                                    <td>.44¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.43¢</td>
                                    <td>.43¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">6” x 9” POSTCARDS
                        </h3>
                        <p>Includes Postage</p>

                        <table class="table table-2  table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                    <th scope="col">PRE-SORT FIRST CLASS PRICE/PIECE
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:250px">1 to 2499</td>
                                    <td>.70¢</td>
                                    <td style="width:250px">.84¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.55¢</td>
                                    <td>.69¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.49¢</td>
                                    <td>.63¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.46¢</td>
                                    <td>.60¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.45¢</td>
                                    <td>.59¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center text-uppercase font-weight-bolder mb-2" style="color:#0017b8">6” x 11” POSTCARDS
                        </h3>
                        <p>Includes Postage</p>

                        <table class="table table-2  table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">PRICE/PIECE</th>
                                    <th scope="col">PRE-SORT FIRST CLASS PRICE/PIECE
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:250px">1 to 2499</td>
                                    <td>.72¢</td>
                                    <td style="width:250px">.82¢</td>
                                </tr>
                                <tr>
                                    <td>2500 to 4999</td>
                                    <td>.61¢</td>
                                    <td>.75¢</td>
                                </tr>
                                <tr>
                                    <td>5000 to 9999</td>
                                    <td>.53¢</td>
                                    <td>.67¢</td>
                                </tr>
                                <tr>
                                    <td>10k to 24,999</td>
                                    <td>.48¢</td>
                                    <td>.62¢</td>
                                </tr>
                                <tr>
                                    <td>25k and up </td>
                                    <td>.47¢</td>
                                    <td>.61¢</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('script')

@endpush