<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetupController extends Controller
{
    public function show($city)
    {
        return view('meetup.show')->with('city', ucwords($city));
    }
}
