<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController{

    public function __construct()
    {
        $this->komponen = new ProductModel();
    }

    public function insertKomponen(){
        
        $data = [
            'nama' => 'RTX 3080',
            'kategori' => 'Graphic Card',
            'deskripsi' => 'ini adalah RTX 3080 dari nvidia',
            'harga' => 3800000
        ];

        $this-> komponen->insert($data);
        
    }

    public function readKomponen(){
        $komponens = $this->komponen->findAll();
        $data = [
            'komponen' => $komponens
        ];
        return view('komponen', $data);
    }
}