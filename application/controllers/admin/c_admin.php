<?php

class c_admin extends CI_Controller {

	public function index(){
        //memanggil file view
        $data=array (
            'sidebar' => 'v_sidebar'
        );
        $this->load->view('admin/v_admin',$data);   
    }
}
?>