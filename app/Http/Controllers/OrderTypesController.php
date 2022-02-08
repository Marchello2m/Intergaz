<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderTypesController extends Controller
{
    public function order()
    {
        $data = DB::table('clients')
            ->join('addresses', 'addresses.id', '=', 'clients.id')
            ->join('deliveries', 'deliveries.id', '=', 'clients.id')
            ->get();
        return view('order-types',compact('data'));

    }
}
