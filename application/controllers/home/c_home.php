<?php

class c_home extends CI_Controller {

	public function index(){
        //memanggil file view
        $data=array (
            'sidebar' => 'v_sidebar'
        );
        $this->load->view('home/v_home',$data);
        
    }

    
}
?>