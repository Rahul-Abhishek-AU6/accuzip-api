<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public function setSlugName($string) {
    // 	$this->slug = explode(' ', $string);
    // }

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function admin() {
    	return $this->belongsTo(Admin::class,'user_id','id');
    }
}
