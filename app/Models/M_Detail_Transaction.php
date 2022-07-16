<?php 

namespace App\Models;
 
use CodeIgniter\Model;

class M_Detail_Transaction extends Model
{


public function __construct()
{
	$this->db=db_connect();
	// $this->builder=$this->db->table($this->table);
}

public function getAlldata(){
	return $this->db->table('tdproduct')->get()->getResultArray();

	// return $this->builder->get();
}

}