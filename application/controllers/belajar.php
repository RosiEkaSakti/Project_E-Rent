<?php
class belajar extends CI_Controller{
    public function index(){
        $this->load->model('data');
        $data['perawat']=$this->data->ambil_data()->result();
        $this->load->view('learn',$data);
    }
}
?>