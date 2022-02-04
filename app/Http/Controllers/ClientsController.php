<?php

namespace App\Http\Controllers;


use App\Models\Addresses;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{

    public function show()
    {
        $data = DB::table('clients')
            //->join('addresses', 'title', '=', 'addresses.title')
            ->join('addresses', 'addresses.id', '=', 'clients.id')
            ->get();

       // $data= DB::table('clients')->get();

        return view('/home',compact('data'));

    }

}
