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
    public function getMembers(Request $request)
    {
    	$api = Newsletter::getApi();
    	dd($api->get('lists/ca865692f4/members'));
    }
}
