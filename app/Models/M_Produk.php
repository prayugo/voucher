<?php 

namespace App\Models;
 
use CodeIgniter\Model;

class M_Produk extends Model
{

	// protected $table='tdproduct';

public function __construct()
{
	$this->db=db_connect();
	// $this->builder=$this->db->table($this->table);
}

public function getAlldata(){
	return $this->db->table('tdproduct')->get()->getResultArray();

	// return $this->builder->get();
}

public function tambah($data)
{
return $this->db->table('tdproduct')->insert($data);

}

public function hapus($id)
{

	return $this->db->table('tdproduct')->delete(['product_id'=> $id]);

}

public function ubah($data,$id)
{

	return $this->db->table('tdproduct')->update($data,['product_id' => $id]);
}



}