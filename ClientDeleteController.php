<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
 

class ClientDeleteController extends Controller
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
    public function deleteClient($clientID){
        Client::findorfail($clientID)->delete();
        return response("delete sussesfully");
    }
}