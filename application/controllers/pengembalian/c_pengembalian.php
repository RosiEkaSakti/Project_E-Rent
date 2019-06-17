<?php

class c_pengembalian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_pengembalian");
		$this->load->library('form_validation');
	}

public function index(){
        //memanggil file view

        $data = array (
             'sidebar' => 'v_sidebar',
            'data' => $this->m_pengembalian->get_view());

        $this->load->view('pengembalian/v_pengembalian/list',$data); 
    }

     public function add()
    {
        $v_pengembalian = $this->m_pengembalian; //objek model
        $validation = $this->form_validation; //objek form validasi // ini untuk membuat objek model dan form validation untuk memudahkan saja
        $validation->set_rules($v_pengembalian->rules()); // terapkan rules

        if ($validation->run()) { // melakukan validasi
            $v_pengembalian->save(); // simpan dat ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }
        $data = array (
             'sidebar' => 'v_sidebar',
            );
        $this->load->view("pengembalian/new_form", $data); //tampilkan form add
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('pengembalian/v_pengembalian');
       
        $v_pengembalian = $this->m_pengembalian; //objek model
        $validation = $this->form_validation; //objrk validation
        $validation->set_rules($v_pengembalian->edit_rules()); //menerapkan rules

        if ($validation->run()) { // melakukan validasi
            $user = array('username' => $this->input->post('username'));
            $v_pengembalian->update($user); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); 
        }

        $data["v_pengembalian"] = $v_admin->getById($id); // mengambil data untuk ditampilkan pada form
        $data['sidebar'] = 'v_sidebar';
        if (!$data["v_pengembalian"]) show_404(); //jika tidak ada data, tampilkan error 404
        
        $this->load->view("pengembalian/v_pengembalian/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_model->delete($id)) {
            redirect(site_url('pengembalian/v_pengembalian'));
        }  
    }
}
?>