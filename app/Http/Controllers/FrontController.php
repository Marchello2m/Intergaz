<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientDelivery()
    {
        return view('client-delivery');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderTypes()
    {
        return view('order-types');
    }
    public function lastDelivery()
    {
        return view('last-delivery');
    }

    public function inactiveClients()
    {
        return view('inactive-clients');
    }
}
