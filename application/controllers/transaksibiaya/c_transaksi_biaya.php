<?php

class c_transaksi_biaya extends CI_Controller {

	public function index(){
        //memanggil file view
        $data=array (
            'sidebar' => 'v_sidebar'
        );
        $this->load->view('transaksibiaya/v_transaksi_biaya',$data);   
    }

public function index(){
        //memanggil file view

        $data = array (
            'sidebar' => 'v_sidebar',
            'data' => $this->m_transaksibiaya->get_view());
    
        $this->load->view('transaksibiaya/v_transaksi_biaya/list',$data);   
    }

     public function add()
    {
        $v_transaksi_biaya = $this->m_transaksibiaya; //objek model
        $validation = $this->form_validation; //objek form validasi // ini untuk membuat objek model dan form validation untuk memudahkan saja
        $validation->set_rules($v_transaksi_biaya->rules()); // terapkan rules

        if ($validation->run()) { // melakukan validasi
            $v_transaksi_biaya->save(); // simpan dat ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }
        $data = array (
             'sidebar' => 'v_sidebar',
            );
        $this->load->view("transaksibiaya/new_form", $data); //tampilkan form add
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('transaksibiaya/v_transaksi_biaya');
       
        $v_transaksi_biaya = $this->m_transaksibiaya; //objek model
        $validation = $this->form_validation; //objrk validation
        $validation->set_rules($v_transaksi_biaya->edit_rules()); //menerapkan rules

        if ($validation->run()) { // melakukan validasi
            $id = array('id_transaksibiaya' => $this->input->post('id_transaksibiaya'));
            $v_transaksi_biaya->update($transaksibiaya); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); 
        }

        $data["v_transaksi_biaya"] = $v_transaksi_biaya->getById($id); // mengambil data untuk ditampilkan pada form
        $data['sidebar'] = 'v_sidebar';
        if (!$data["v_transaksi_biaya"]) show_404(); //jika tidak ada data, tampilkan error 404
        
        $this->load->view("transaksibiaya/v_transaksi_biaya/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_model->delete($id)) {
            redirect(site_url('transaksibiaya/v_transaksi_biaya'));
        }  
    }
}
?>
}
?>