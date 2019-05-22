<?php

class c_pelanggan extends CI_Controller {

	public function index(){
        //memanggil file view
        $data=array (
            'sidebar' => 'v_sidebar'
        );
        $this->load->view('v_pelanggan',$data);   
    }
}
?>