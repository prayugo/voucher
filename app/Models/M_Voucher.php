<?php namespace App\Models;
 
use CodeIgniter\Model;

class M_Voucher extends Model
{


public function saveVoucher($data){
	 $query = $this->db->table('tdvoucher')->insert($data);
     return $query;
}

public function updateVoucher($data, $id)
    {
        $query = $this->db->table('tdvoucher')->update($data, array('voucher_id' => $id));
        return $query;
    }
 
public function deleteProduct($id)
    {
        $query = $this->db->table('tdvoucher')->delete(array('voucher_id' => $id));
        return $query;
    } 





}