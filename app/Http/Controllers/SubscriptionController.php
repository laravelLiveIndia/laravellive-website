<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
    	$this->validate($request,[
    		'email' => 'required|email'
    	]);
    	Newsletter::subscribe($request->email);
    	return response()->json(['status'=> 'OK', 'message' => 'Subscribed!']);
    }
}
