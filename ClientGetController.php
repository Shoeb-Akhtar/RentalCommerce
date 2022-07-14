<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
 

class ClientGetController extends Controller
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
    public function getClient($clientID){
        return response()->json(Client::find($clientID));
    }
}