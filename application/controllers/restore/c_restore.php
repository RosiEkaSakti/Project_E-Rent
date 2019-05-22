<?php

class c_restore extends CI_Controller {

	public function index(){
        //memanggil file view
        $data=array (
            'sidebar' => 'v_sidebar'
        );
        $this->load->view('restore/v_restore',$data);   
    }
}
?>