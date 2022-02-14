<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use App\Models\Clients;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveriesController extends Controller
{

    public function getOne1($id)
    {
       $data = DB::table('clients')
            ->find($id);



        return view('client-delivery', compact('data'));

    }


    public function getOne($id)
    {
        $data = DB::table('clients')
            ->find($id);
        $addresse = DB::table('addresses')
            ->find($id)  ;
        $price = DB::table('delivery_lines')
            ->find($id);
        $routes = DB::table('routes')
            ->find($id);

        return view('client-delivery', compact('data','addresse','price','routes'));

    }





    public function showAll()
    {
        $data = DB::table('clients')
            ->join('addresses', 'clients.id', '=', 'addresses.client_id')
            ->join('delivery_lines', 'clients.id', '=', 'delivery_lines.client_id')
            ->join('routes', 'clients.id', '=', 'routes.client_id')
            ->select(['clients.*','addresses.*' ,'delivery_lines.*' ,'routes.*'])
            ->get();
        return view('last-delivery', compact('data'));
    }



}
