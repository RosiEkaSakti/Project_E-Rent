<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class home extends CI_Controller {


public function index ()
{
	$this->load->view('latihan');
}
public function index1 ()
{
	$this->load->view('biodata');
}
public function index2 ()
{
	$this->load->view('galery');
}

}
