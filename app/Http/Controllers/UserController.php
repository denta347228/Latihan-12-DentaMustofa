<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function searchUser(Request $request){
    $user = $request->query('name');
    $email = $request->query('email');

    $responser = response()->json([


        "nama" => $user,
        "email"=> $email,
        "dataAlamat" =>[
            [
                "nomor"=>1,
                "Kota"=>"Tanggerang Selatan",
                "Provinsi"=>"Banten",
                "Negara"=>"Indonesia",
            ],
            [
                "nomor"=>2,
                "Kota"=>"Tanggerang Selatan",
                "Provinsi"=>"Banten",
                "Negara"=>"Indonesia",
            ]
        ]
      
    ]);

    return $responser;
        
    }
    public function finduser($id){
        return "user{$id}";
    }
}
