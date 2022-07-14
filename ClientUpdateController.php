<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
 

class ClientUpdateController extends Controller
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
    public function updateClient($clientID,Request $request){
        $client=Client::findorfail($clientID);
        $client->update($request->all());
        return response()->json($client);
    }
}