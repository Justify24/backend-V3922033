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

    public function updateKomponen($id){
        $nama = $this->request->getVar("nama");
        $kategori = $this->request->getVar("kategori");
        $deskripsi = $this->request->getVar("deskripsi");
        $harga = $this->request->getVar("harga");
    
        $data = [
            'nama' => $nama,
            'kategori' => $kategori,
            'deskripsi' => $deskripsi,
            'harga' => $harga
        ];
        $this->komponen->update($id, $data);
        return redirect()->to(base_url("viewkomponen"));
    }

    public function getKomponen($id) {
        $komponen = $this->komponen->where("id", $id)->first();
        $data = [
            'komponen' => $komponen
        ];
        return view('editkomponen', $data);   
    }

    public function deleteKomponen($id){
        $this->komponen->delete($id);
        return redirect()->to(base_url("viewkomponen"));
    }

}