<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
 

class ClientCreateController extends Controller
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
    public function CreateClient(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'emailAddress'=>'required',
            'phoneNumber'=>'required',
            'password'=>'required'
        ]);
        $client= new Client;
        $client->name=$request->input("name");
        $client->emailAddress=$request->input("emailAddress");
        $client->phoneNumber=$request->input("phoneNumber");
        $client->password=$request->input("password");
        $client->save();
        return response()->json(["data"=>$client]);
        
    }
}