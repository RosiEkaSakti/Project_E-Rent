<?php

class c_pembayaran extends CI_Controller {

	public function index(){
        //memanggil file view
        $data=array (
            'sidebar' => 'v_sidebar'
        );
        $this->load->view('pembayaran/v_pembayaran',$data);   
    }
}
?>