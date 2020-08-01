<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function paymentInfo() {
    	return $this->belongsTo(PaymentInfo::class,'id','order_id');
    }

    public function cartData() {
    	return $this->hasMany(CartData::class);
    }

    public function billingAddress() {
    	return $this->belongsTo(BillingAddress::class,'billing_id','id');
    }

    public function shippingAddress() {
    	return $this->belongsTo(ShippingAddress::class,'shipping_id','id');
    }
}
