<?php

class Variable extends CI_Controller {

public function index(){
    $data = array(
        "variable1" => "Ini adalah isi dari DATA PERTAMA.",
        "variable2" => "Lalu ini adalah isi dari DATA berikutnya (KEDUA)."
    );

    $this->load->view('variableview',$data);
    }
}
?>