<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Ajay',
            'emailAddress'=>'ajay@gmail',
            'phoneNumber'=>'1236564586',
            'password'=>'ajay123'
            
        ]);
        DB::table('clients')->insert([
            'name' => 'Raju',
            'emailAddress'=>'raju@gmail',
            'phoneNumber'=>'6547678214',
            'password'=>'raju258'
            
        ]);
    }
}
