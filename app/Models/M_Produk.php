<?php 

namespace App\Models;
 
use CodeIgniter\Model;

class M_Produk extends Model
{


public function saveProduct($data){
	 $query = $this->db->table('tdproduct')->insert($data);
     return $query;
}


}