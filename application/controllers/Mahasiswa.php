<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Mahasiswa extends CI_Controller {


public function index ()
{
	$this->load->view('Home');
}
public function Name ()
{
	$this->load->view('Name');
}
public function Gol ()
{
	$this->load->view('Gol');
}
public function Prodi ()
{
	$this->load->view('Prodi');
}

}