<?php 

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
        protected $table = 'komponen';

        protected $returnType = 'object';

        protected $primaryKey = 'id';

        protected $allowedFields = ['id', 'nama', 'kategori', 'deskripsi', 'harga'];

        // public function insertProduct($data){

        //     $query = "INSERT INTO products (nama_product, description) VALUES (?,?)";
        //     $this->db->query($query, [$data['nama_product'], $data['description']]);
        //     return $this->db->insertID();
        // }

        public function insertKomponen($data){
            return $this->insert($data);
        }
}