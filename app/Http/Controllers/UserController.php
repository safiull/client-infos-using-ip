<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{
    public function index(Request $request)
    {
        /* $ip = $request->ip(); Dynamic IP address */
        $ip = '182.160.97.196:8088'; /* Static IP address */
        $currentUserInfo = Location::get($ip);

        return view('user', compact('currentUserInfo'));
    }
}
