<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use App\Product;
use Session;
use App\Order;
use App\PaymentInfo;
use Auth;

use App\Mail\OrderShipped;
use Mail;
use Illuminate\Support\Facades\Storage;

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

// use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\State;



class AccuZipController extends Controller
{
	public $baseUri = 'https://cloud2.iaccutrace.com';

    public function index(Request $request) {
    	return view('how-we-work');
    }

    public function requestAccuzip(Request $request) {
    	// return $request;
    	if ($request->accuzip_servie == 'direct_mail') {
    		// $data = $this->DirectMail();

    		// return $data = collect(json_decode($data));

    		return view('directmail.how-we-work');

    	}elseif($request->accuzip_servie == 'own_list'){
            // return 'ok';
            return view('how-we-work-ownlist');
    		
    	} else{
            $data = $this->EddmRequest();

            $data = collect(json_decode($data));

            return view('how-we-work',compact('data'));
        }  	
    	
    }

    public function eddmAddress(Request $request) {
        Session::put('eddm_address',$request->all());
        // return $request;
        return Redirect()->route('web.how-we-worl-payment-get');
    }

    public function ownListAddress (Request $request) {
        Session::put('own_list_address',$request->all());
        // return 'ok';
        return redirect()->route('how-we-work-own-list-load-payment');    
    }

    public function UploadOwnList(Request $request) {
        $request->validate([
            'own_list' => 'required'
        ]);

        $filePath = Storage::put('own-list-excel', $request->own_list);

        $path = $request->file('own_list')->getRealPath();

        $collection = new DataImport;

        Excel::import($collection,request()->file('own_list'));

        $rowcount = $collection->getRowCount();

        Session::put('own_list_excel',$filePath);

        Session::put('own_list_count', $rowcount);

        return view('how-we-work-select-options');
    }

    public function OwnListPayment(Request $request) {
        // return $request;
        $data = $request->except(['art_work']);
        Session::put('own_list_data',$data);
        if ($request->choose_design_option == 'upload_art_work') {
            $filePath = Storage::put('own-list-art', $request->art_work);

            Session::put('upload_art_work',$filePath);
        }
        
        return redirect()->route('web.address-get-quote.how.we.work-form-own-list');
        // return redirect()->route('how-we-work-own-list-load-payment');        
    }

    public function ownListLoadPaymentPage(Request $request) {
    
        $data =  Session::get('own_list_data');
        $totalQty = Session::get('own_list_count');
        $address = Session::get('own_list_address');

        $size = $data['mail_format'];
        $designOption = $data['choose_design_option'];

        $amount = $this->calculateDirectMailAmt(Session::get('own_list_count'),$size);

        if ($designOption == 'Profession_design_service') {
            $amount += 150;
        }

        $state = State::where('state',$address['state'])->first();

        $amount = $amount+$this->calSelTextDirectMail(Session::get('own_list_count'),$size);

        $amount += ($amount*$state->sales_tax)/100;        


        return view('how-we-work-payment-own-list',compact('amount','totalQty','size','designOption'));
    }

    public function RequestQuote(Request $request) {
        // return $request;
		$headers = [
		    'Accept: application/json',
		    'Content-Type: application/json'
		];

		$guid = $request->guid;

		$url = "https://cloud2.iaccutrace.com/servoy-service/rest_ws/ws_360/v2_0/job/".$request->guid."/QUOTE/true";

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
		// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$results = curl_exec($ch);
		curl_close($ch);

		$data = collect(json_decode($results));

		return view('how-we-work-quote',compact('data','guid'));
    }

  //   public function ProductDetail(Request $request, $slug) {
  //   	// return $request;
  //   	$headers = [
		//     'Accept: application/json',
		//     'Content-Type: application/json'
		// ];

		// $guid = 'DBC63A71-5AF5-4E7C-ACC1-626E7551F3ED';//$request->guid;

		// $url = "https://cloud2.iaccutrace.com/servoy-service/rest_ws/ws_360/v2_0/job/".$request->guid."/QUOTE/true";

		// $ch = curl_init();

		// curl_setopt($ch, CURLOPT_URL, $url);
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
		// // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		// $results = curl_exec($ch);
		// curl_close($ch);

		// $data = collect(json_decode($results));

  //       // return response()->json($data);

  //   	$product = Product::where('slug',$slug)->with('images')->first();
  //   	return view('how-we-work-product-detail',compact('product','data'));
  //   }

    public function updateQuote(Request $request) {
        // return $request;
    	$data = $request->except(['art_work']);

    	Session::put('eddm_data',$data);

        if ($request->file('art_work')) {

            $filePath = Storage::put('own-list-art', $request->art_work);

            Session::put('upload_art_work_eddm',$filePath);

        }

    	$row = $request->only(
    		'Standard_Nonprofit_Flat',
    		'Standard_Nonprofit_Letter',
    		'Estimated_Postage_Standard_Nonprofit_Letter',
    		'format',
    		'Estimated_Postage_Standard_Letter',
    		'Total_Residential',
    		'drop_zip',
    		'Estimated_Postage_Standard_Flat',
    		'total_postage',
    		'Standard_Letter',
    		'success',
    		'presort_class',
    		'Estimated_Postage_Standard_Nonprofit_Flat',
    		'mail_piece_size',
    		'Total_Possible',
    		'Standard_Flat',
    		'postage_saved'

    	);

    	$row['postage_saved'] =(string)'';
    	$row['total_postage'] =(string)'';

    	$row['format'] =(string)'UPPER';
    	$row['drop_zip'] =(string)'93205';
    	$row['presort_class'] =(string)'STANDARD MAIL';
    	$row['mail_piece_size'] =(string)'CARD';
    	
    	$data = collect($row);


    	$headers = [
		    'Accept: application/json',
		    'Content-Type: application/json'
		];
		$url = "https://cloud2.iaccutrace.com/servoy-service/rest_ws/ws_360/v2_0/job/".$request->guid."/QUOTE";

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");  
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$results = curl_exec($ch);
		curl_close($ch);

		$data = collect(json_decode($results));

		// return $this->RequestQuote($request);
		return $this->CASSPresort($request);
		return $data;
		// return view('how-we-work-quote',compact('data','guid'));
    }

    public function addInCartPayment(Request $request) {
        
    	$request->validate([
    		'card_number' => 'required',
    		'exp_month' => 'required',
    		'exp_year' => 'required',
    		'cvv' => 'required',
    	]);


        
        if ($request->own_list_option == '1') {
            
            $Sessiondata =  Session::get('own_list_data');
            $totalQty = Session::get('own_list_count');
            $size = $Sessiondata['mail_format'];
            $designOption = $Sessiondata['choose_design_option'];

            $amount = $this->calculateDirectMailAmt(Session::get('own_list_count'),$size);

            if ($designOption == 'Profession_design_service') {
                $amount += 150;
            }

            $amount = $amount+$this->calSelTextDirectMail(Session::get('own_list_count'),$size);

            $data = $request->all();
            $data['amount'] = $amount;

            $payment = $this->chargeCreditCard($data);

            if (isset($payment['trans_id'])) {
                $ord = new Order;
                $ord->order_type = 'OWNLIST';
                $ord->mail_formate = $size;
                $ord->design = Session::get('own_list_excel');
                $ord->accuzip_file = Session::get('upload_art_work');
                $ord->user_id = Auth::user()->id;
                $ord->sub_amount = $data['amount'];
                $ord->total_amount = $data['amount'];
                // return $ord;
                $ord->save();

                $pInfo = new PaymentInfo;
                $pInfo->user_id = Auth::user()->id;
                $pInfo->order_id = $ord->id;
                $pInfo->tran_id = $payment['trans_id'];
                $pInfo->status = 'SUCCESS';
                $pInfo->amount = $data['amount'];

                $pInfo->save();
            }
            return redirect('/')->with(['orderMessage'=>'orderMessage','order_id'=>$ord->id,'order_amt'=>$ord->total_amount]);
            // return redirect('/')->with(['type'=>'success','message'=>'Order has benn placed']);

            return false;
        }

    	$ampunt = $this->calculateEDDMAmout(); 

    	$ampunt = $ampunt+$this->calculateSalesTax();	

    	$data = $request->all();
    	$data['amount'] = number_format($ampunt,2);  
    	
    	$session_data = Session::get('eddm_data');


    	$payment = $this->chargeCreditCard($data);

    	if (isset($payment['trans_id'])) {
            $eddmData = Session::get('eddm_data');

            $guid = $eddmData['guid'];

            $url = "https://cloud2.iaccutrace.com/ws_360_webapps/download.jsp?guid=".$guid."&ftype=csv";

            $contents = file_get_contents($url);
            $name = 'accuzip-file/'.time().'.csv';//.substr($url, strrpos($url, '/') + 1);

            // File::put( public_path( 'dskdlks/'.$name),  $contents);

            $store = Storage::put($name, $contents);

    		$ord = new Order;
    		$ord->order_type = 'EDDM';
    		$ord->mail_formate = $session_data['mail_format'];
            $ord->design = Session::get('upload_art_work_eddm');
    		$ord->accuzip_file = $name;
	    	$ord->user_id = Auth::user()->id;
	    	$ord->sub_amount = $data['amount'];
	    	$ord->total_amount = $data['amount'];
	    	$ord->save();

	    	$d = array('order_id'=>$ord->id,'amount'=>$data['amount'],'transaction_id'=>$payment['trans_id']);


	    	Session::put('eddm_order_pay_data',$d);

            $pInfo = new PaymentInfo;
            $pInfo->user_id = Auth::user()->id;
            $pInfo->order_id = $ord->id;
            $pInfo->tran_id = $payment['trans_id'];
            $pInfo->status = 'SUCCESS';
            $pInfo->amount = $data['amount'];

            $pInfo->save();
            
	        Mail::to($request->user())->send(new OrderShipped($ord,$request->user()));
            return redirect('/')->with(['orderMessage'=>'orderMessage','order_id'=>$ord->id,'order_amt'=>$ord->total_amount]);
    		// return $this->requestEDDMData(Session::get('eddm_data'));

    	}

        return redirect('/')->with(['type'=>'error','message'=>'Payment fail']);

    }

    // public function CompleteOrder(Request $request) {
    // 	if (Session::has('eddm_order_pay_data')) {

    // 		$dd = Session::get('eddm_order_pay_data');

    //         $pInfo = new PaymentInfo;
    //         $pInfo->user_id = Auth::user()->id;
    //         $pInfo->order_id = $dd['order_id'];
    //         $pInfo->tran_id = $dd['transaction_id'];
    //         $pInfo->status = 'SUCCESS';
    //         $pInfo->amount = $dd['amount'];

    //         $pInfo->save();
    //     }

    //    	return redirect('/')->with(['type'=>'success','message'=>'Order has benn placed']);
    // }

    public function requestEDDMData($data) {

    	$url = 'https://cloud2.iaccutrace.com/ws_360_webapps/download.jsp?guid=B49CA4E6-07E1-4F31-9250-2CD74B65DED2&ftype=csv';
        $contents = file_get_contents($url);
        $name = 'accuzip-file/'.time().'.csv';//.substr($url, strrpos($url, '/') + 1);

        // File::put( public_path( 'dskdlks/'.$name),  $contents);

        $store = Storage::put($name, $contents);

        return response()->json($store);


  //   	$headers = [
		//     'Accept: application/json',
		//     'Content-Type: application/json'
		// ];

		// $guid = $data['guid'];

		// $url = "https://cloud2.iaccutrace.com/ws_360_webapps/download.jsp?guid=".$guid."&ftype=csv";

		// return view('how-we-work-download',compact('url'));

		
    }

    public function CASSPresort(Request $request) {
    	$headers = [
		    'Accept: application/json',
		    'Content-Type: application/json'
		];

		$guid = $request->guid;

		$url = "https://cloud2.iaccutrace.com/servoy-service/rest_ws/ws_360/v2_0/job/".$guid."/CASS-PRESORT";

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
		// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$results = curl_exec($ch);
		curl_close($ch);

		$data = collect(json_decode($results));

		return $this->GETQT($request);
		return $data;
    }

    private function EddmRequest() {

    	$data = [
		    'callback_url' =>  'https://rushprintnyc.fundflu.com/sendmail',
		    'API_KEY' => 'FB02823F-D2AA-4D37-A189-0A8C07587702',
		    'EDDM_version' => 4,
		];

		$headers = [
		    'Accept: application/json',
		    'Content-Type: application/json'
		];

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://cloud2.iaccutrace.com/servoy-service/rest_ws/mod_eddm/ws_auto");
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$results = curl_exec($ch);
		curl_close($ch);

		return $results;
    	
    }

    public function GETQT(Request $request) {

		$headers = [
		    'Accept: application/json',
		    'Content-Type: application/json'
		];

		$guid = $request->guid;

		$url = "https://cloud2.iaccutrace.com/servoy-service/rest_ws/ws_360/v2_0/job/".$request->guid."/QUOTE";

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
		// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$results = curl_exec($ch);
		curl_close($ch);
		return Redirect()->route('web.address-get-quote.how.we.work-form');
        return Redirect()->route('web.how-we-worl-payment-get');
		// return $this->requestEDDMData($request);
		return $data = collect(json_decode($results));

    }

    public function paymentGet() {

    	$amount = $this->calculateEDDMAmout();
        $data = Session::get('eddm_data');
        $amount = $amount+$this->calculateSalesTax();
        $amount = number_format($amount,2);

        
		return view('how-we-work-payment',compact('amount','data'));
    }



    // Direct mail code begai here
    public function DirectMail() {

    	$data = [
		    // 'callback_url' =>  'https://rushprintnyc.fundflu.com/how-we-work',
		    'apiKey' => 'FB02823F-D2AA-4D37-A189-0A8C07587702',
		    // 'EDDM_version' => 3,
		];

		$headers = [
		    'Accept: application/json',
		    'Content-Type: application/json'
		];

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://cloud2.iaccutrace.com/servoy-service/rest_ws/ws_360/v2_0/INFO");
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$results = curl_exec($ch);
		curl_close($ch);

		return $results;
    }
    // Direct mail code end here


    public function chargeCreditCard($data) {
        // return str_replace(',', '', number_format($data['amount'],2));
        // Common setup for API credentials
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(config('services.authorize.login'));
        $merchantAuthentication->setTransactionKey(config('services.authorize.key'));
        $refId = 'ref'.time();
        // Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($data['card_number']);
        // $creditCard->setExpirationDate( "2038-12");
        $expiry = $data['exp_year'] . '-' . $data['exp_month'];
        $creditCard->setExpirationDate($expiry);
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);
        // Create a transaction
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        $transactionRequestType->setAmount(str_replace(',', '', number_format($data['amount'],2)));
        $transactionRequestType->setPayment($paymentOne);
        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId( $refId);
        $request->setTransactionRequest($transactionRequestType);
        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
        // dd($response->getTransactionResponse());


        if ($response != null) {
            $tresponse = $response->getTransactionResponse();

            if (($tresponse != null) && ($tresponse->getResponseCode()=="1")) {
                return [
                    'trans_id' => $tresponse->getTransId(),                    
                ];
                echo "Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() . "\n";
                echo "Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "\n";
            } else {
                return 'not_valid';
                echo "Charge Credit Card ERROR :  Invalid response\n";
            }
        }else {
            return 'not_valid';
            echo  "Charge Credit Card Null response returned";
        }
        
        // return redirect('/');
    }

    public function calculateEDDMAmout() {

    	$amount = 0;
    	if (Session::has('eddm_data')) {
    		$data = Session::get('eddm_data');
            $address = Session::get('eddm_address');
            // return $data;
            $amount += $this->getCountPrice($data['Total_Possible'],$data['mail_format']);
    		// $amount += $data['Total_Residential']*1;            

    		if ($data['choose_design_option'] == 'Profession_design_service') {
                if ($data['mail_format'] == '11"X17"') {
                    $amount += 250;
                }else{
                    $amount += 150;
                }
    			
    		}

            $state = State::where('state',$address['state'])->first();
            $amount += ($amount*$state->sales_tax)/100;
    	}        

    	return $amount;
    }

    public function calculateSalesTax() {
    	$amount = 0;
    	if (Session::has('eddm_data')) {
    		
    		$data = Session::get('eddm_data');

    		$qty = str_replace(',','' , $data['Total_Possible']);

            $amount += $qty*.19;

    	}        

    	return $amount;
    }

    public function getCountPrice($qty = 0 ,$size = '') {

        // return $size;
        $qty = str_replace(',','' , $qty);
        // for size 4.25x12
        if ($size == '4.25"X12"') {
            if ($qty > 0 && $qty < 2500) {
                return $qty*0.38;
            }

            if ($qty >= 2500 && $qty < 5000) {
                return $qty*0.23;
            }

            if ($qty >= 5000 && $qty < 9999) {
                return $qty*0.17;
            }

            if ($qty >= 10000 && $qty < 25000) {
                return $qty*0.14;
            }

            if ($qty >= 25000) {
                return $qty*0.13;
            }
        }

        // for size 6.25x9

        if ($size == '6.25"X9"') {
            if ($qty > 0 && $qty < 2500) {
                return $qty*0.38;
            }

            if ($qty >= 2500 && $qty < 5000) {
                return $qty*0.23;
            }

            if ($qty >= 5000 && $qty < 9999) {
                return $qty*0.17;
            }

            if ($qty >= 10000 && $qty < 25000) {
                return $qty*0.14;
            }

            if ($qty >= 25000) {
                return $qty*0.13;
            }
        }

        // for size 6.25x11

        if ($size == '6.25"X11"') {
            if ($qty > 0 && $qty < 2500) {
                return $qty*0.40;
            }

            if ($qty >= 2500 && $qty < 5000) {
                return $qty*0.29;
            }

            if ($qty >= 5000 && $qty < 9999) {
                return $qty*0.21;
            }

            if ($qty >= 10000 && $qty < 25000) {
                return $qty*0.18;
            }

            if ($qty >= 25000) {
                return $qty*0.16;
            }
        }

        // for size 8.5x11

        if ($size == '8.5"X11"') {
            if ($qty > 0 && $qty < 2500) {
                return $qty*0.41;
            }

            if ($qty >= 2500 && $qty < 5000) {
                return $qty*0.31;
            }

            if ($qty >= 5000 && $qty < 9999) {
                return $qty*0.22;
            }

            if ($qty >= 10000 && $qty < 25000) {
                return $qty*0.20;
            }

            if ($qty >= 25000) {
                return $qty*0.17;
            }
        }

        // for size 11x17

        if ($size == '11"X17"') {
            if ($qty > 0 && $qty < 2500) {
                return $qty*0.50;
            }

            if ($qty >= 2500 && $qty < 5000) {
                return $qty*0.31;
            }

            if ($qty >= 5000 && $qty < 9999) {
                return $qty*0.26;
            }

            if ($qty >= 10000 && $qty < 25000) {
                return $qty*0.23;
            }

            if ($qty >= 25000) {
                return $qty*0.20;
            }
        }       

        return 0;
    }

    

    public function calculateDirectMailAmt($qty = 1, $size = '4"x6"') {

        if ($size == '4"x6"') {
            if ($qty > 0 && $qty < 2500) {
                return $qty*0.33;
            }

            if ($qty >= 2500 && $qty < 5000) {
                return $qty*0.21;
            }

            if ($qty >= 5000 && $qty < 9999) {
                return $qty*0.18;
            }

            if ($qty >= 10000 && $qty < 25000) {
                return $qty*0.15;
            }

            if ($qty >= 25000) {
                return $qty*0.14;
            }
        }

        if ($size == '6"x9"') {
            if ($qty > 0 && $qty < 2500) {
                return $qty*0.41;
            }

            if ($qty >= 2500 && $qty < 5000) {
                return $qty*0.26;
            }

            if ($qty >= 5000 && $qty < 9999) {
                return $qty*0.20;
            }

            if ($qty >= 10000 && $qty < 25000) {
                return $qty*0.17;
            }

            if ($qty >= 25000) {
                return $qty*0.16;
            }
        }

        if ($size == '6"x11"') {
            if ($qty > 0 && $qty < 2500) {
                return $qty*0.39;
            }

            if ($qty >= 2500 && $qty < 5000) {
                return $qty*0.32;
            }

            if ($qty >= 5000 && $qty < 9999) {
                return $qty*0.24;
            }

            if ($qty >= 10000 && $qty < 25000) {
                return $qty*0.19;
            }

            if ($qty >= 25000) {
                return $qty*0.18;
            }
        }
    } 

    public function calSelTextDirectMail($qty = 1, $size = '4"x6"') {
        if ($size == '4"x6"') {

            return $qty*0.29;
        }

        if ($size == '6"x9"') {

            return $qty*0.43;
        }

        if ($size == '6"x11"') {
            return $qty*0.43;
        }
    }


    // direct mail methods here only

    public function getDirectMailData(Request $request) {        

        return redirect()->route('web.direct-mail.select.get');
    }

    public function getSelectOption(Request $request) {
        return view('directmail.how-we-work-chose-option');
    }
    public function saveSelectOption(Request $request) {

        $data = $request->except('art_work');

        if ($request->choose_design_option == 'upload_art_work') {
            $filePath = Storage::put('direct-mail', $request->art_work);

            Session::put('direct_mail',$filePath);
        }
        Session::put('direct_mail_select',$data);
        return redirect()->route('web.direct-mail.address.get');
    }

    public function getAddress(Request $request) {
        return view('directmail.how-we-work-address');
    }

    public function saveAddress(Request $request) {
        Session::put('direct_mail_address');
        return redirect()->route('web.direct-mail.payment.get');
    }

    public function getPayment(Request $request) {
        $data = Session::get('direct_mail_select');
        $count = Session::get('direct_mail_count');
        $countD = $count['count'];
        $data['mail_format'];
        $data['Total_Possible'] = $countD??0;
        $designOption = $data['choose_design_option'];
        $amount = $this->calculateDirectMailAmt($countD,$data['mail_format']);

        if ($designOption == 'Profession_design_service') {
            $amount += 150;
        }

        $amount = $amount+$this->calSelTextDirectMail($countD,$data['mail_format']);
        Session::put('direct_mail_final_amount',$amount);
        return view('directmail.how-we-work-payment',compact('data','amount'));
    }

    public function processPayment(Request $request) {
        $Sessiondata = Session::get('direct_mail_select');
        $data = $request->all();
        $data['amount'] = Session::get('direct_mail_final_amount');
        $payment = $this->chargeCreditCard($data);
        if (isset($payment['trans_id'])) {
            $ord = new Order;
            $ord->order_type = 'DIRECT_MAIL';
            $ord->mail_formate = $Sessiondata['mail_format'];
            $ord->design = Session::get('direct_mail');
            $ord->accuzip_file = '';
            $ord->user_id = Auth::user()->id;
            $ord->sub_amount = $data['amount'];
            $ord->total_amount = $data['amount'];
            // return $ord;
            $ord->save();

            $pInfo = new PaymentInfo;
            $pInfo->user_id = Auth::user()->id;
            $pInfo->order_id = $ord->id;
            $pInfo->tran_id = $payment['trans_id'];
            $pInfo->status = 'SUCCESS';
            $pInfo->amount = $data['amount'];

            $pInfo->save();

            return redirect('/')->with(['orderMessage'=>'orderMessage','order_id'=>$ord->id,'order_amt'=>$ord->total_amount]);
        }

        return back()->with(['type'=>'error','message'=>'Payment Fail']);
        
        
    }

    public function getTotalCount(Request $request) {
        $request->validate([
            'lat' => 'required',
            'lng' => 'required'
        ]);
        $auth_api = $this->initAuth();

        $data = json_decode($auth_api,true);
        $api_token =  $data['api_token'];
        $url = 'https://cloud2.iaccutrace.com/servoy-service/rest_ws/ws_mail_list/ws_count/'.$api_token;

        $data = [
            $request->datatype => [
                'NAICS' => '511210,423430',
                'Physical_state' => 'CA'
            ]
        ];

        $dataForZip = [
            $request->datatype => [
                'NAICS' => '511210,423430',//$request->lat.','.$request->lng,
                'Physical_state' => 'CA',
                'count_by_zipcode' => [
                    'GroupFields' => [
                        'Physical_zip'
                    ],
                    'DisplayFields' => [
                        'Physical_zip'
                    ],
                ],
            ]
        ];

        $headers = [
            'Accept: application/json',
            'Content-Type: application/json'
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $results = curl_exec($ch);
        curl_close($ch);

        $results = json_decode($results,true);
        Session::put('direct_mail_count',$results);
        return $results;
    }



    public function initDownload() {

    }

    public function initAuth(){
        $data = [
            'api_key' => 'FB02823F-D2AA-4D37-A189-0A8C07587702',
        ];

        $headers = [
            'Accept: application/json',
            'Content-Type: application/json'
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://cloud2.iaccutrace.com/servoy-service/rest_ws/ws_mail_list/ws_init");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $results = curl_exec($ch);
        curl_close($ch);

        return $results;
    }

    // direct mail methods end here

}
