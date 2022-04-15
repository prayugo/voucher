<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\M_Voucher;

class C_Voucher extends BaseController
{

public function __construct(){

	$this->model=new M_Voucher;

}
   
public function index()
    {
        
        $query = $this->db->query("select * from tdvoucher");
		$data['voucher'] = $query->getresult();
        return view('voucher/get',$data);
    }
 
    public function save()
    {
       
        $data = array(
            'kode_voucher'        => $this->request->getPost('kode_voucher'),
            'voucher_name'       => $this->request->getPost('voucher_name'),
            'value_voucher' => $this->request->getPost('value_voucher'),
        );
        
        $this->model->saveVoucher($data);


        if ($this->db->affectedRows()>0) {
            return redirect()-> to('voucher')->with('success','Data Berhasil Ditambahkan');
        }
        
    }
 
    public function update()
    {
        
        $id = $this->request->getPost('voucher_id');
        $data = array(
            'kode_voucher'        => $this->request->getPost('kode_voucher'),
            'voucher_name'       => $this->request->getPost('voucher_name'),
            'value_voucher' => $this->request->getPost('value_voucher'),
        );
        $model->updateProduct($data, $id);
        return redirect()->to('voucher');
    }
 
    public function delete()
    {
        
        $id = $this->request->getPost('voucher_id');
        $model->deleteProduct($id);
        return redirect()->to('voucher');
    }

}
