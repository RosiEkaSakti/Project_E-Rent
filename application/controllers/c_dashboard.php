<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_dashboard extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
    }


	public function index(){
		 {
        if($this->admin->logged_id())
        {

        //memanggil file view
        $data=array (
            'sidebar' => 'v_sidebar'
        );
        $this->load->view('v_home',$data);
        
    }

    
}
?>