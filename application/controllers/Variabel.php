<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Variable extends CI_Controller {

public function index () {
	$data = array (
	"variable1" => "Ini perubahan yang baru terjadi adalah data dari variabel ke-1",
	"variable2" => "Ini adalah data dari variabel ke-2"
	);

	$this->load->view('variableview', $data);
}
}