<?php

class c_transaksi_biaya extends CI_Controller {

	public function index(){
        //memanggil file view
        $data=array (
            'sidebar' => 'v_sidebar'
        );
        $this->load->view('transaksibiaya/v_transaksi_biaya',$data);   
    }
}
?>