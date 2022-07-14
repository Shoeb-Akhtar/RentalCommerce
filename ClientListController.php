<?php

namespace App\Http\Controllers;

class ClientListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function listClient(){
        return response()->json(Client::all());
    }
}