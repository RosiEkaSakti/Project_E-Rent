<?php

class c_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_admin");
		$this->load->library('form_validation');
	}

	public function index(){
        //memanggil file view

        $data = array (
            'data' => $this->m_admin->get_view());

        $this->load->view('admin/v_admin/list',$data); 
    }

    public function add()
    {
        $v_admin = $this->m_admin; //objek model
        $validation = $this->form_validation; //objek form validasi // ini untuk membuat objek model dan form validation untuk memudahkan saja
        $validation->set_rules($v_admin->rules()); // terapkan rules

        if ($validation->run()) { // melakukan validasi
            $v_admin->save(); // simpan dat ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/new_form"); //tampilkan form add
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/v_admin');
       
        $v_admin = $this->m_model; //objek model
        $validation = $this->form_validation; //objrk validation
       $validation->set_rules($v_admin->rules()); //menerapkan rules

        if ($validation->run()) { // melakukan validasi
            $v_admin->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); 
        }

        $data["v_admin"] = $product->getById($id); // mengambil data untuk ditampilkan pada form
        if (!$data["v_admin"]) show_404(); //jika tidak ada data, tampilkan error 404
        
        $this->load->view("admin/v_admin/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_model->delete($id)) {
            redirect(site_url('admin/v_admin'));
        }  
    }
}

?>