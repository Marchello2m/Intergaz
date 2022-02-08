<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveriesController extends Controller
{


    public function getOne($client_id)
    {
        $data = DB::table('clients')
            ->find($client_id);

        return view('client-delivery', compact('data'));

    }



    public function showClient()
    {
        $data = DB::table('clients')
            ->join('addresses', 'addresses.id', '=', 'clients.id')
            ->join('delivery_lines', 'delivery_lines.id', '=', 'clients.id')
            ->join('routes', 'routes.id', '=', 'clients.id')
            ->get();

        // ->join('addresses', 'clients.id', '=', 'addresses.client_id')
        //  ->join('delivery_lines', 'clients.id', '=', 'delivery_lines.client_id')
        //  ->join('routes', 'clients.id', '=', 'routes.client_id')

        return view('client-delivery', compact('data'));

    }


}
