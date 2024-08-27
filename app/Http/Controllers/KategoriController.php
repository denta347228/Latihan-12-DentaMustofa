<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategori = [
        [
            "namaKategori"=>'Samsung',
            "uniqueID"=>'500014',
            'created_at'=> now(),
            'updated_at'=> now()
           
        ],
        [
            "namaKategori"=>'Apple',
            "uniqueID"=>'500015',
            'created_at'=> now(),
            'updated_at'=> now()
        ]
        ];

        $produk = [
        [
            "namaKategori"=>'A',
            "uniqueID"=>'500014',
            "kategori_id"=>1,
            "harga"=>10000,
            "diskon"=> 0.5,
            'created_at'=> now (),
            'updated_at'=> now ()

        ],
        [
            "namaKategori"=>'samsull',
            "uniqueID"=>'500014',
            "kategori_id"=>2,
            "harga"=>10001,
            "diskon"=> 0.5,
            'created_at'=> now (),
            'updated_at'=> now ()

        ],
        [
            "namaKategori"=>'samsull',
            "uniqueID"=>'500014',
            "kategori_id"=>3,
            "harga"=>10003,
            "diskon"=> 0.5,
            'created_at'=> now (),
            'updated_at'=> now ()

        ],
        [
            "namaKategori"=>'samsull',
            "uniqueID"=>'500014',
            "kategori_id"=>4,
            "harga"=>10004,
            "diskon"=> 0.5,
            'created_at'=> now (),
            'updated_at'=> now ()

        ],
        [
            "namaKategori"=>'samsull',
            "uniqueID"=>'500014',
            "kategori_id"=>5,
            "harga"=>10006,
            "diskon"=> 0.5,
            'created_at'=> now (),
            'updated_at'=> now ()

        ],
        [
            "namaKategori"=>'samsull',
            "uniqueID"=>'500014',
            "kategori_id"=>8,
            "harga"=>10088,
            "diskon"=> 0.5,
            'created_at'=> now (),
            'updated_at'=> now ()

        ],
        [
            "namaKategori"=>'samsull',
            "uniqueID"=>'500014',
            "kategori_id"=>9,
            "harga"=>100332,
            "diskon"=> 0.5,
            'created_at'=> now (),
            'updated_at'=> now ()

        ],
        [
            "namaKategori"=>'samsull',
            "uniqueID"=>'500014',
            "kategori_id"=>10,
            "harga"=>10000,
            "diskon"=> 0.5,
            'created_at'=> now (),
            'updated_at'=> now ()

        ],
        [
            "namaKategori"=>'samsull',
            "uniqueID"=>'500014',
            "kategori_id"=>11,
            "harga"=>10012,
            "diskon"=> 0.5,
            'created_at'=> now (),
            'updated_at'=> now ()

        ],
        [
            "namaKategori"=>'samsull',
            "uniqueID"=>'500014',
            "kategori_id"=>13,
            "harga"=>100231,
            "diskon"=> 0.5,
            'created_at'=> now (),
            'updated_at'=> now ()

        ],];

        

        foreach( $produk as $item){
            $item['potongan'] = $item['harga']-($item['harga']*$item['diskon']);
        }
   
     
        // return view('admin.kategori',compact('kategori'));
        // return view('admin.kategori')->with("kategori", $kategori)-> with('produk',$produk);



        return view("admin.kategori",[
            "kategori"=> $kategori,
            "produk"=> $produk
        ]);
    }
}
