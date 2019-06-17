<?php

class c_pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_pelanggan");
		$this->load->library('form_validation');
	}

	public function index(){
        //memanggil file view

        $data = array (
            'sidebar' => 'v_sidebar',
            'data' => $this->m_pelanggan->get_view());
    
        $this->load->view('pelanggan/v_pelanggan/list',$data);   
    }

     public function add()
    {
        $v_pelanggan = $this->m_pelanggan; //objek model
        $validation = $this->form_validation; //objek form validasi // ini untuk membuat objek model dan form validation untuk memudahkan saja
        $validation->set_rules($v_pelanggan->rules()); // terapkan rules

        if ($validation->run()) { // melakukan validasi
            $v_pelanggan->save(); // simpan dat ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }
        $data = array (
             'sidebar' => 'v_sidebar',
            );
        $this->load->view("pelanggan/new_form", $data); //tampilkan form add
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('pelanggan/v_pelanggan');
       
        $v_pelanggan = $this->m_pelanggan; //objek model
        $validation = $this->form_validation; //objrk validation
        $validation->set_rules($v_pelanggan->edit_rules()); //menerapkan rules

        if ($validation->run()) { // melakukan validasi
            $id = array('id_pelanggan' => $this->input->post('id_pelanggan'));
            $v_pelanggan->update($pelanggan); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); 
        }

        $data["v_pelanggan"] = $v_pelanggan->getById($id); // mengambil data untuk ditampilkan pada form
        $data['sidebar'] = 'v_sidebar';
        if (!$data["v_pelanggan"]) show_404(); //jika tidak ada data, tampilkan error 404
        
        $this->load->view("pelanggan/v_pelanggan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_model->delete($id)) {
            redirect(site_url('pelanggan/v_pelanggan'));
        }  
    }
}
?>