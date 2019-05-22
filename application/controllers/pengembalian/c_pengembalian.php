<?php

class c_pengembalian extends CI_Controller {

	public function index(){
        //memanggil file view
        $data=array (
            'sidebar' => 'v_sidebar'
        );
        $this->load->view('pengembalian/v_pengembalian',$data);   
    }
}
?>