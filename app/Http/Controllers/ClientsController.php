<?php

namespace App\Http\Controllers;


use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function show()
    {
        $data= DB::table('clients')->get();
        return view('/home',compact('data'));

    }
    public function showAddress()
    {

    }
}
