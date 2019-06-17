<?php

class c_mobil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_mobil");
		$this->load->library('form_validation');
	}

	public function index(){
        //memanggil file view
        
        $data = array (
             'sidebar' => 'v_sidebar',
            'data' => $this->m_mobil->get_view());

        $this->load->view('mobil/v_mobil/list',$data); 
    }

    public function add()
    {

        $v_mobil = $this->m_mobil; //objek model
        $validation = $this->form_validation; //objek form validasi // ini untuk membuat objek model dan form validation untuk memudahkan saja
        $validation->set_rules($v_mobil->rules()); // terapkan rules

        if ($validation->run()) { // melakukan validasi
            $v_mobil->save(); // simpan dat ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }
        $data = array (
             'sidebar' => 'v_sidebar',
             'jenis' => $v_mobil->getJenis()
            );
        // $data['jenis'] = $v_mobil->getJenis();
        $this->load->view("mobil/new_form", $data); //tampilkan form add
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('mobil/v_mobil');
       
        $v_mobil = $this->m_mobil; //objek model
        $validation = $this->form_validation; //objrk validation
        $validation->set_rules($v_mobil->edit_rules()); //menerapkan rules

        if ($validation->run()) { // melakukan validasi
            // $id = array('id_mobil' => $this->input->post('id_mobil'));
            $v_mobil->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); 
        }

        $data["v_mobil"] = $v_mobil->getById($id); // mengambil data untuk ditampilkan pada form
        $data['sidebar'] = 'v_sidebar';
        $data['jenis'] = $v_mobil->getJenis();
        if (!$data["v_mobil"]) show_404(); //jika tidak ada data, tampilkan error 404
        
        $this->load->view("mobil/v_mobil/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_mobil->delete($id)) {
            
        }  
        redirect(site_url().'mobil/c_mobil');
    }
}

?>