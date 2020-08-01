<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;



class AuthorizeController extends Controller
{
	public $baseUri = 'https://cloud2.iaccutrace.com';

    public function index(Request $request) {
    	return view('how-we-work');
    }

    public function requestAccuzip(Request $request) {

    	$data = $this->EddmRequest();

    	$data = collect(json_decode($data));

    	return view('how-we-work',compact('data'));
    	
    }

    public function RequestQuote(Request $request) {

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

    public function updateQuote(Request $request) {

    	// return $this->GETQT($request);

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

    public function requestEDDMData(Request $request) {

    	$headers = [
		    'Accept: application/json',
		    'Content-Type: application/json'
		];

		$guid = $request->guid;

		$url = "https://cloud2.iaccutrace.com/ws_360_webapps/download.jsp?guid=".$guid."&ftype=csv";

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

		return $data;
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
		// return $this->RequestQuote($request);
		return $data;
    }

    private function EddmRequest() {

    	$data = [
		    'callback_url' =>  'https://rushprintnyc.fundflu.com/how-we-work',
		    'API_KEY' => 'FB02823F-D2AA-4D37-A189-0A8C07587702',
		    'EDDM_version' => 3,
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

		return $data = collect(json_decode($results));

		return view('how-we-work-quote',compact('data','guid'));
    }


}
