<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsLetter;

class NewsletterController extends Controller
{
    public function store(Request $request) {
    	$request->validate([
    		'email' => 'email|required|unique:news_letters'
    	],['unique'=>'You are already subscribed!']);

    	$new = new NewsLetter;
    	$new->email = $request->email;
    	$new->save();

    	return back()->with(['type'=>'success','message'=>'You are subscribed!']);


    }
}
