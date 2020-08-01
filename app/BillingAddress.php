<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    public function getNameAttribute() {

        $name = $this->first_name.' '.$this->last_name;
        return ucwords($name);        
    }

    
}
