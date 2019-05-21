<?php

class c_dashboard extends CI_Controller {

	public function index(){
        //memanggil file view
        $data=array (
            'sidebar' => 'v_sidebar'
        );
        $this->load->view('v_dashboard',$data);
        
    }

    
}
?>