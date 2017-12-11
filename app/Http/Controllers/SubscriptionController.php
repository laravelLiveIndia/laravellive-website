<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
    	Newsletter::subscribe('vaibhavraj.roham@gmail.com');
    }
}
