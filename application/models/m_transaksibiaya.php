<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_transaksibiaya extends CI_Model
{
    private $_table = "tb_transaksibiaya";

    public $id_transaksibiaya;
    public $tgl_sewa;
    public $id_mobil;
    public $no_ktp;
    public $nama_lengkap
    public $harga;
    public $jumlah_harga;
    public $denda;
    public $total_harga;

    public function rules()
    {
        return [
            ['field' => 'id_transaksibiaya',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'tgl_sewa',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'id_mobil',
            'label' => 'image',
            'rules' => 'required'],
            
            ['field' => 'no_ktp',
            'label' => 'no',
            'rules' => 'required'],

             ['field' => 'nama_lengkap',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'harga',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'jumlah_harga',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'denda',
            'label' => 'colour',
            'rules' => 'required'],

             ['field' => 'total_harga',
            'label' => 'no',
            'rules' => 'required'],
        ];
    }

    public function edit_rules()
    {
        return [
            ['field' => 'tgl_sewa',
            'label' => 'No',
            'rules' => 'numeric'],

           ['field' => 'id_mobil',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'mobil',
            'label' => 'image',
            'rules' => 'required'],
            
            ['field' => 'no_ktp',
            'label' => 'no',
            'rules' => 'required'],

             ['field' => 'nama_lengkap',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'harga',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'jumlah_harga',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'denda',
            'label' => 'colour',
            'rules' => 'required'],

             ['field' => 'total_harga',
            'label' => 'no',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_transaksibiaya" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_transaksibiaya = $post["id_transaksibiaya"];
        $this->tgl_sewa = $post["tgl_sewa"];
        $this->id_mobil = $post["id_mobil"];
        $this->no_ktp ($post["no_ktp"]);
        $this->nama_lengkap = ($post["nama_lengkap"]);
        $this->harga = ($post["harga"]);
        $this->jumlah_harga = ($post["jumlah_harga"]);
        $this->denda = ($post["denda"]);
        $this->total_harga = ($post["total_harga"]);
        $this->db->insert($this->_table, $this);
    }

    public function update($user)
    {
        $post = $this->input->post();
        $this->id_mobil = $post["id"];
        $this->db->update($this->_table, $user, array("id_transaksibiaya" => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_transaksibiaya" => $id));
    }

    public function get_view(){
        $query = $this->db->query("SELECT * FROM tb_transaksibiaya");
        return $query->result();
    }
}
?>