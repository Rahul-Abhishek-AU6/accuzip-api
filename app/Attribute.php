<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function attributeValue() {
    	return $this->hasMany(AttributeValue::class);
    }
}
