<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Order;
use Auth;
use App\BillingAddress;
use App\ShippingAddress;
use Session;
use App\Card;
use App\PaymentInfo;
use App\Mail\OrderShipped;
use Mail;
use App\CartData;

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;
use App\State;

class OrderController extends Controller
{
    public function order(Request $request) {

        // return Cart::getContent();
        if (Session::get('payment_type') == 'paypal') {
            // return $this->paypalPayment(Session::all());
        }

        if (Session::get('payment_type') == 'new_entry') {

            // return Session::get('card_info');
            $payInfo = $this->chargeCreditCard($request,Session::get('card_info'));
            // return $payInfo;
            if ($payInfo == 'not_valid') {
                return back()->with(['type'=>'error','message'=>'Your card is not valid!']);
            }
            
        }

    	$cartData = Cart::getContent();

    	$ord = new Order;
    	$ord->user_id = Auth::user()->id;
    	$ord->sub_amount = Cart::getSubTotal();
        $ord->shipping = Session::get('ups_charges');
    	$ord->total_amount = Cart::getTotal()+Session::get('ups_charges')+Session::get('sales_tax');

    	$ord->save();

        Mail::to($request->user())->send(new OrderShipped($ord,$request->user()));
        
        if (Session::get('payment_type') == 'new_entry') {
            $pInfo = new PaymentInfo;
            $pInfo->user_id = Auth::user()->id;
            $pInfo->order_id = $ord->id;
            $pInfo->tran_id = $payInfo['trans_id'];
            $pInfo->status = 'SUCCESS';
            $pInfo->amount = Cart::getTotal();

            $pInfo->save();
        }
        // store caet content in database begain
        foreach (Cart::getContent() as $key => $value) {
            $cd = new CartData;
            $cd->order_id = $ord->id;
            $cd->name = $value->name;
            $cd->qty = $value->quantity;
            $cd->amount = $value->price;
            $cd->row_data = json_encode($value);
            $cd->save();
        }
        // store cart content in database end

    	Cart::clear();
        return redirect('/')->with(['orderMessage'=>'orderMessage','order_id'=>$ord->id,'order_amt'=>$ord->total_amount]);
    	return redirect('/')->with(['type'=>'success','message'=>'Order Created']);
    }

    public function addShipping(Request $request) {
    	
    	$request->validate([
    		'first_name' => 'required|string',
    		'last_name' => 'required|string',
    		// 'company' => 'required',
    		'email' => 'required|email',
    		'address' => 'required|string',
    		'city' => 'required',
    		'state' => 'required',
    		'country' => 'required',
    		'zip' => 'required',
    	]);

        $shippingCharge =  $this->calculateShipping($request->all());
        $state = State::where('state',$request->state)->first();
        $salesTax = (Cart::getTotal()*$state->sales_tax)/100;
        Session::put('sales_tax',$salesTax);
        Session::put('ups_charges',$shippingCharge);

        // return redirect()->route('web.checkout','target=shipping_method')->with(['type'=>'success','message'=>'Address added!']);

    	$add = new ShippingAddress;
    	$add->user_id = Auth::user()->id;
    	$add->first_name = $request->first_name;
    	$add->last_name = $request->last_name;
    	$add->company = 'ayz';
    	$add->email = $request->email;
    	$add->address = $request->address;
    	$add->city = $request->city;
    	$add->state = $request->state;
    	$add->country = $request->country;
    	$add->zip = $request->zip;
    	$add->is_default = '1';

    	$old = ShippingAddress::where('user_id',Auth::user()->id)->update(['is_default'=>'0']);

    	if ($add->save()) {
    		return redirect()->route('web.checkout','target=shipping_method')->with(['type'=>'success','message'=>'Address added!']);
    		
    	}

    	return back()->with(['error'=>'error','message'=>'Something went wrong!']);

    }

    public function addBilling(Request $request) {
    	// return $this->addShipping($request);
    	$request->validate([
    		'first_name' => 'required|string',
    		'last_name' => 'required|string',
    		// 'company' => 'required',
    		'email' => 'required|email',
    		'address' => 'required|string',
    		'city' => 'required',
    		'state' => 'required',
    		'country' => 'required',
    		'zip' => 'required',
    	]);

    	$add = new BillingAddress;
    	$add->user_id = Auth::user()->id;
    	$add->first_name = $request->first_name;
    	$add->last_name = $request->last_name;
    	$add->company = 'xyz';
    	$add->email = $request->email;
    	$add->address = $request->address;
    	$add->city = $request->city;
    	$add->state = $request->state;
    	$add->country = $request->country;
    	$add->zip = $request->zip;
    	$add->is_default = '1';

    	$old = BillingAddress::where('user_id',Auth::user()->id)->update(['is_default'=>'0']);

    	if ($add->save()) {

            if ($request->same_as_shipping) {
                return $this->addShipping($request);
            }
    		return redirect()->route('web.checkout','target=shipping')->with(['type'=>'success','message'=>'Address added!']);
    	}

    	return back()->with(['error'=>'error','message'=>'Something went wrong!']);

    }

    public function setShippingMethods(Request $request) {
    	$request->validate([
    		'shipping_method' => 'required',
    	]);

        

        if ($request->shipping_method == 'ups') {
            $this->updateShippingCharges(Session::get('ups_charges'));
        }


    	$request->session()->put('shipping_method', $request->shipping_method);

    	return redirect()->route('web.checkout','target=payment_info')->with(['type'=>'success','message'=>'Shipping has beed for '.$request->shipping_method]);
    }

    public function addCard(Request $request) {
        
        $request->session()->put('payment_type',$request->card);

        if ($request->card == 'paypal') {
            return redirect()->route('web.checkout','target=order_review')->with(['type'=>'success','message'=>'Payment type has been set']);
        }


        $request->validate([
            'card_number' => 'required|numeric',
            'exp_month' => 'required',
            'exp_year' => 'required',
            'cvv' => 'required|numeric|min:3',
        ]);
        if ($request->save_for_future) {
            $card = Card::firstOrNew(['user_id'=>Auth::user()->id,'card_number'=>$request->card_number]);
            $card->exp_month = $request->exp_month;
            $card->exp_year = $request->exp_year;
            $card->cvv = $request->cvv;
            $card->status = '1';

            $card->save();           

        }        

        $request->session()->put('card_info', $request->all());

        return redirect()->route('web.checkout','target=order_review')->with(['type'=>'success','message'=>'Card has been added']);
    }

    public function chargeCreditCard(Request $request,$data) {
        // return Cart::getTotal();
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
        $transactionRequestType->setAmount(number_format(Cart::getTotal()+Session::get('sales_tax')+Session::get('ups_charges'),2));
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

    private function paypalPayment($data) {

        $data = [];
        $data['items'] = [
            [
                'name' => 'ItSolutionStuff.com',
                'price' => 100,
                'desc'  => 'Description for ItSolutionStuff.com',
                'qty' => 1
            ]
        ];
  
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = Cart::getTotal();

        $provider = new ExpressCheckout;
  
        $response = $provider->setExpressCheckout($data);
  
        $response = $provider->setExpressCheckout($data, true);
  
        return redirect($response['paypal_link']);
    }

    public function calculateShipping($data) {
        
        $accessKey = '8D7E8685B8F88855';
        $userId = 'rushprintnycUPS';
        $password = 'Monkey$1808';

        // $timeInTransit = new \Ups\TimeInTransit($accessKey, $userId, $password);
        $rate = new \Ups\Rate(
            $accessKey,
            $userId,
            $password
        );
        try {


            $shipment = new \Ups\Entity\Shipment();

            $shipperAddress = $shipment->getShipper()->getAddress();
            $shipperAddress->setPostalCode('11550');

            $address = new \Ups\Entity\Address();
            $address->setPostalCode('11550');
            $shipFrom = new \Ups\Entity\ShipFrom();
            $shipFrom->setAddress($address);

            $shipment->setShipFrom($shipFrom);

            $shipTo = $shipment->getShipTo();
            $shipTo->setCompanyName('xyz');
            $shipToAddress = $shipTo->getAddress();
            $shipToAddress->setPostalCode($data['zip']);

            $package = new \Ups\Entity\Package();
            $package->getPackagingType()->setCode(\Ups\Entity\PackagingType::PT_PACKAGE);
            $package->getPackageWeight()->setWeight(2);           
           

            $shipment->addPackage($package);

            // $rate->getRate($shipment)->RatedShipment[0]->TotalCharges->MonetaryValue;

            if ($rate->getRate($shipment)) {
                if ($rate->getRate($shipment)->RatedShipment[0]) {
                    if ($rate->getRate($shipment)->RatedShipment[0]->TotalCharges) {
                        return $rate->getRate($shipment)->RatedShipment[0]->TotalCharges->MonetaryValue;
                    }else{
                        return 0;
                    }
                }else{
                    return 0;
                }
            }else{
                return 0;
            }


            // return response()->json($rate->getRate($shipment));
            // var_dump($rate->getRate($shipment));

        } catch (Exception $e) {
            // var_dump($e);
        }
    }

    public function updateShippingCharges($data) {

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'UPS_Shipping',
            'type' => 'shipping',
            'target' => 'total',
            'value' => (string)$data,
            'order' => 1
        ));
        Cart::condition($condition);
    }
}
