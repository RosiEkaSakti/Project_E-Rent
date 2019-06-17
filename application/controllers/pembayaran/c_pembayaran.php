<?php

class c_pembayaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_pembayaran");
        $this->load->library('form_validation');
    }

	public function index(){
        //memanggil file view

     $data = array (
        'sidebar' => 'v_sidebar',
    'data' => $this->m_pembayaran->get_view());
    
        $this->load->view('pembayaran/v_pembayaran/list',$data);   
    }

     public function add()
    {
        $v_pembayaran = $this->m_pembayaran; //objek model
        $validation = $this->form_validation; //objek form validasi // ini untuk membuat objek model dan form validation untuk memudahkan saja
        $validation->set_rules($v_pembayaran->rules()); // terapkan rules

        if ($validation->run()) { // melakukan validasi
            $v_pembayaran->save(); // simpan dat ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }
        $data = array (
             'sidebar' => 'v_sidebar',
            );
        $this->load->view("pembayaran/new_form", $data); //tampilkan form add
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('pembayaran/v_pembayaran');
       
        $v_pembayaran = $this->m_pembayaran; //objek model
        $validation = $this->form_validation; //objrk validation
        $validation->set_rules($v_pembayaran->edit_rules()); //menerapkan rules

        if ($validation->run()) { // melakukan validasi
            $user = array('username' => $this->input->post('username'));
            $v_pembayaran->update($user); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); 
        }

        $data["v_pembayaran"] = $v_pembayaran->getById($id); // mengambil data untuk ditampilkan pada form
        $data['sidebar'] = 'v_sidebar';
        if (!$data["v_pembayaran"]) show_404(); //jika tidak ada data, tampilkan error 404
        
        $this->load->view("pembayaran/v_pembayaran/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_model->delete($id)) {
            redirect(site_url('pembayaran/v_pembayaran'));
        }  
    }
}
?>
}
?>