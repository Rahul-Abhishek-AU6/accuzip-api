@extends('layouts.common')


@push('meta')
<title>Rusprintnyc</title>

<meta name="description" content="">

<meta name="keywords" content="">
@endpush

@push('style')

@endpush

@section('content')
<section class=" sldr">
   <img src="{{ url('') }}/web/images/abt-banner.png" class="" alt="Slider  ">
   <div class="marketing-maters">
   <h2>FAQ'S</h2>
   <ul class="m-m">
      <span><a href="#">Home / </a></span>
      <span><a href="#"> Faq’s </a></span>
   </ul>
</section>
<section class="faqs">
   <div class="container">
      <div class="row">
         <ul id="accordion" class="col-sm-6 col-md-12">
            <!-- Question one -->
            <li>
               <div id="choose" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                  <p class="bshsj"> DIRECT MAIL</p>
                  <span class="fa fa-chevron-up fa-1x text-info pull-right"></span>
               </div>
               <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                     <h3>How do I set up my mail list?</h3>
                     <p>If you already have your list organized in a spreadsheet, follow these instructions to upload a file to us and load all of your addresses at once. All addresses must be in one file we cannot merge multiple files through the site. If you have a complex mailing with multiple mailing lists please email Custom@rushprintnyc.com.
                        1) Download our excel template here: Excel Address Template. 2) Open it in Microsoft Excel (for PC and Mac users) 3) Copy the cells from your spreadsheet for a particular column and paste them into the corresponding column in the template 4)Once you have all the addresses correctly, save your spreadsheet with your name then upload when choosing order options.
                        DO NOT MOVE, EDIT, OR CHANGE THE HEADERS FOR THE COLUMNS IN THE TEMPLATE IN ANY WAY. A) Name B) Address 1 C) Address 2 D) Address 2 E) City F) State G) ZIP Code
                        Zip codes that start with 0 are losing their 0’s! Some spreadsheet applications may remove zeros from the beginning of zip codes. To avoid or fix this issue in Excel:
                        - Select the Zip Code column - Right click and select Format Cells - Go to the Number tab - Select Category: Special - Choose Type: Zip Code - Select OK
                     </p>
                     <h3>What happens after I submit my mail list?</h3>
                     <p>Your list is first run through our mailing software to organize all of the data and it is sent to be verified against the USPS National Change Of Address (NCOA) registration list. If someone on your list moved and notified the Post Office of their move then this will be automatically updated for you so it goes to the right person. After your list has been updated by the NCOA it is presorted according to postal route and this is why the postage is less than if you mailed it yourself.</p>
                     <h3>My mailing list doesn’t match your quantities exactly?</h3>
                     <p>Please choose the next largest quantity that is greater than your mailing list. We will send the overs not mailed to you by UPS ground free of charge</p>
                     <h3>How much is postage?</h3>
                     <p>We offer two levels of postal service and each comes with its own fixed postage rate depending on the schedule of delivery required. Presort First Class provides delivery within 2-5 days, Presort Standard ensures delivery within 7-10 days. We have seen Presort Standard mail deliver faster but neither Rushprintnyc.com or even the USPS guarantees the delivery schedule for Presort Standard mail and it can vary greatly on postal volume. If your mailing is time sensitive we recommend you choose Presort First Class Mail. Rushprintnyc.com is not responsible for how or when the USPS delivers any mail. You will only be charged for the postage amount for the number of pieces mailed. Postage is not charged on your overs they are sent to you free of charge by UPS ground.</p>
                  </div>
               </div>
            </li>
            <!-- Question two -->
            <li>
               <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <p class="bshsj">DESIGN AND PRODUCT INFORMATION </p>
                  <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
               </div>
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                     <h3>How do I set up my mail list?</h3>
                     <p>If you already have your list organized in a spreadsheet, follow these instructions to upload a file to us and load all of your addresses at once. All addresses must be in one file we cannot merge multiple files through the site. If you have a complex mailing with multiple mailing lists please email Custom@rushprintnyc.com.
                        1) Download our excel template here: Excel Address Template. 2) Open it in Microsoft Excel (for PC and Mac users) 3) Copy the cells from your spreadsheet for a particular column and paste them into the corresponding column in the template 4)Once you have all the addresses correctly, save your spreadsheet with your name then upload when choosing order options.
                        DO NOT MOVE, EDIT, OR CHANGE THE HEADERS FOR THE COLUMNS IN THE TEMPLATE IN ANY WAY. A) Name B) Address 1 C) Address 2 D) Address 2 E) City F) State G) ZIP Code
                        Zip codes that start with 0 are losing their 0’s! Some spreadsheet applications may remove zeros from the beginning of zip codes. To avoid or fix this issue in Excel:
                        - Select the Zip Code column - Right click and select Format Cells - Go to the Number tab - Select Category: Special - Choose Type: Zip Code - Select OK
                     </p>
                     <h3>What happens after I submit my mail list?</h3>
                     <p>Your list is first run through our mailing software to organize all of the data and it is sent to be verified against the USPS National Change Of Address (NCOA) registration list. If someone on your list moved and notified the Post Office of their move then this will be automatically updated for you so it goes to the right person. After your list has been updated by the NCOA it is presorted according to postal route and this is why the postage is less than if you mailed it yourself.</p>
                     <h3>My mailing list doesn’t match your quantities exactly?</h3>
                     <p>Please choose the next largest quantity that is greater than your mailing list. We will send the overs not mailed to you by UPS ground free of charge</p>
                     <h3>How much is postage?</h3>
                     <p>We offer two levels of postal service and each comes with its own fixed postage rate depending on the schedule of delivery required. Presort First Class provides delivery within 2-5 days, Presort Standard ensures delivery within 7-10 days. We have seen Presort Standard mail deliver faster but neither Rushprintnyc.com or even the USPS guarantees the delivery schedule for Presort Standard mail and it can vary greatly on postal volume. If your mailing is time sensitive we recommend you choose Presort First Class Mail. Rushprintnyc.com is not responsible for how or when the USPS delivers any mail. You will only be charged for the postage amount for the number of pieces mailed. Postage is not charged on your overs they are sent to you free of charge by UPS ground.</p>
                  </div>
               </div>
            </li>
            <!-- Question three -->
            <li>
               <div class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <p class="bshsj">ORDERING </p>
                  <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
               </div>
               <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                     <h3>How do I set up my mail list?</h3>
                     <p>If you already have your list organized in a spreadsheet, follow these instructions to upload a file to us and load all of your addresses at once. All addresses must be in one file we cannot merge multiple files through the site. If you have a complex mailing with multiple mailing lists please email Custom@rushprintnyc.com.
                        1) Download our excel template here: Excel Address Template. 2) Open it in Microsoft Excel (for PC and Mac users) 3) Copy the cells from your spreadsheet for a particular column and paste them into the corresponding column in the template 4)Once you have all the addresses correctly, save your spreadsheet with your name then upload when choosing order options.
                        DO NOT MOVE, EDIT, OR CHANGE THE HEADERS FOR THE COLUMNS IN THE TEMPLATE IN ANY WAY. A) Name B) Address 1 C) Address 2 D) Address 2 E) City F) State G) ZIP Code
                        Zip codes that start with 0 are losing their 0’s! Some spreadsheet applications may remove zeros from the beginning of zip codes. To avoid or fix this issue in Excel:
                        - Select the Zip Code column - Right click and select Format Cells - Go to the Number tab - Select Category: Special - Choose Type: Zip Code - Select OK
                     </p>
                     <h3>What happens after I submit my mail list?</h3>
                     <p>Your list is first run through our mailing software to organize all of the data and it is sent to be verified against the USPS National Change Of Address (NCOA) registration list. If someone on your list moved and notified the Post Office of their move then this will be automatically updated for you so it goes to the right person. After your list has been updated by the NCOA it is presorted according to postal route and this is why the postage is less than if you mailed it yourself.</p>
                     <h3>My mailing list doesn’t match your quantities exactly?</h3>
                     <p>Please choose the next largest quantity that is greater than your mailing list. We will send the overs not mailed to you by UPS ground free of charge</p>
                     <h3>How much is postage?</h3>
                     <p>We offer two levels of postal service and each comes with its own fixed postage rate depending on the schedule of delivery required. Presort First Class provides delivery within 2-5 days, Presort Standard ensures delivery within 7-10 days. We have seen Presort Standard mail deliver faster but neither Rushprintnyc.com or even the USPS guarantees the delivery schedule for Presort Standard mail and it can vary greatly on postal volume. If your mailing is time sensitive we recommend you choose Presort First Class Mail. Rushprintnyc.com is not responsible for how or when the USPS delivers any mail. You will only be charged for the postage amount for the number of pieces mailed. Postage is not charged on your overs they are sent to you free of charge by UPS ground.</p>
                  </div>
               </div>
            </li>
            <!-- Question Four -->
            <li>
               <div class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <p class="bshsj"> DELIVERY & SHIPPING </p>
                  <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
               </div>
               <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                     <h3>How do I set up my mail list?</h3>
                     <p>If you already have your list organized in a spreadsheet, follow these instructions to upload a file to us and load all of your addresses at once. All addresses must be in one file we cannot merge multiple files through the site. If you have a complex mailing with multiple mailing lists please email Custom@rushprintnyc.com.
                        1) Download our excel template here: Excel Address Template. 2) Open it in Microsoft Excel (for PC and Mac users) 3) Copy the cells from your spreadsheet for a particular column and paste them into the corresponding column in the template 4)Once you have all the addresses correctly, save your spreadsheet with your name then upload when choosing order options.
                        DO NOT MOVE, EDIT, OR CHANGE THE HEADERS FOR THE COLUMNS IN THE TEMPLATE IN ANY WAY. A) Name B) Address 1 C) Address 2 D) Address 2 E) City F) State G) ZIP Code
                        Zip codes that start with 0 are losing their 0’s! Some spreadsheet applications may remove zeros from the beginning of zip codes. To avoid or fix this issue in Excel:
                        - Select the Zip Code column - Right click and select Format Cells - Go to the Number tab - Select Category: Special - Choose Type: Zip Code - Select OK
                     </p>
                     <h3>What happens after I submit my mail list?</h3>
                     <p>Your list is first run through our mailing software to organize all of the data and it is sent to be verified against the USPS National Change Of Address (NCOA) registration list. If someone on your list moved and notified the Post Office of their move then this will be automatically updated for you so it goes to the right person. After your list has been updated by the NCOA it is presorted according to postal route and this is why the postage is less than if you mailed it yourself.</p>
                     <h3>My mailing list doesn’t match your quantities exactly?</h3>
                     <p>Please choose the next largest quantity that is greater than your mailing list. We will send the overs not mailed to you by UPS ground free of charge</p>
                     <h3>How much is postage?</h3>
                     <p>We offer two levels of postal service and each comes with its own fixed postage rate depending on the schedule of delivery required. Presort First Class provides delivery within 2-5 days, Presort Standard ensures delivery within 7-10 days. We have seen Presort Standard mail deliver faster but neither Rushprintnyc.com or even the USPS guarantees the delivery schedule for Presort Standard mail and it can vary greatly on postal volume. If your mailing is time sensitive we recommend you choose Presort First Class Mail. Rushprintnyc.com is not responsible for how or when the USPS delivers any mail. You will only be charged for the postage amount for the number of pieces mailed. Postage is not charged on your overs they are sent to you free of charge by UPS ground.</p>
                  </div>
               </div>
            </li>
            <!-- Questiion Five -->
            <li>
               <div class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <p class="bshsj">REFUND/REPRINT POLICY</p>
                  <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
               </div>
               <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                  <div class="card-body">
                     <h3>How do I set up my mail list?</h3>
                     <p>If you already have your list organized in a spreadsheet, follow these instructions to upload a file to us and load all of your addresses at once. All addresses must be in one file we cannot merge multiple files through the site. If you have a complex mailing with multiple mailing lists please email Custom@rushprintnyc.com.
                        1) Download our excel template here: Excel Address Template. 2) Open it in Microsoft Excel (for PC and Mac users) 3) Copy the cells from your spreadsheet for a particular column and paste them into the corresponding column in the template 4)Once you have all the addresses correctly, save your spreadsheet with your name then upload when choosing order options.
                        DO NOT MOVE, EDIT, OR CHANGE THE HEADERS FOR THE COLUMNS IN THE TEMPLATE IN ANY WAY. A) Name B) Address 1 C) Address 2 D) Address 2 E) City F) State G) ZIP Code
                        Zip codes that start with 0 are losing their 0’s! Some spreadsheet applications may remove zeros from the beginning of zip codes. To avoid or fix this issue in Excel:
                        - Select the Zip Code column - Right click and select Format Cells - Go to the Number tab - Select Category: Special - Choose Type: Zip Code - Select OK
                     </p>
                     <h3>What happens after I submit my mail list?</h3>
                     <p>Your list is first run through our mailing software to organize all of the data and it is sent to be verified against the USPS National Change Of Address (NCOA) registration list. If someone on your list moved and notified the Post Office of their move then this will be automatically updated for you so it goes to the right person. After your list has been updated by the NCOA it is presorted according to postal route and this is why the postage is less than if you mailed it yourself.</p>
                     <h3>My mailing list doesn’t match your quantities exactly?</h3>
                     <p>Please choose the next largest quantity that is greater than your mailing list. We will send the overs not mailed to you by UPS ground free of charge</p>
                     <h3>How much is postage?</h3>
                     <p>We offer two levels of postal service and each comes with its own fixed postage rate depending on the schedule of delivery required. Presort First Class provides delivery within 2-5 days, Presort Standard ensures delivery within 7-10 days. We have seen Presort Standard mail deliver faster but neither Rushprintnyc.com or even the USPS guarantees the delivery schedule for Presort Standard mail and it can vary greatly on postal volume. If your mailing is time sensitive we recommend you choose Presort First Class Mail. Rushprintnyc.com is not responsible for how or when the USPS delivers any mail. You will only be charged for the postage amount for the number of pieces mailed. Postage is not charged on your overs they are sent to you free of charge by UPS ground.</p>
                  </div>
               </div>
            </li>
            <!-- Question Six-->
         </ul>
      </div>
   </div>
</section>
@endsection

@push('script')

@endpush