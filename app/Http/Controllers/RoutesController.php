<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoutesController extends Controller
{
    public function routeStatus()
    {
        $status= DB::select('select status from routes ', array(1));


        return view('/order-types',compact('status'));
    }
}
