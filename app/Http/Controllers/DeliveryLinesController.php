<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryLinesController extends Controller
{
    public function noLiquid()
    {
        $data = DB::table('clients')
            ->join('addresses', 'clients.id', '=', 'addresses.client_id')
            ->join('delivery_lines', 'clients.id', '=', 'delivery_lines.client_id')
            ->join('routes', 'clients.id', '=', 'routes.client_id')
            ->get();
        return view('inactive-clients', compact('data'));
    }
}
