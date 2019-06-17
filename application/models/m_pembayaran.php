<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_pembayaran extends CI_Model
{
    private $_table = "tb_pembayaran";
    public $id_bayar;
    public $id_transaksi;
    public $tgl_bayar;
    public $pembayaran;
    public $no_rek;
    public $nama_bank;
    public $atas_nama;

    public function rules()
    {
        return [
            ['field' => 'id_bayar',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'id_transaksi',
            'label' => 'No',
            'rules' => 'numeric'],
            
            ['field' => 'tgl_bayar',
            'label' => 'No',
            'rules' => 'required'],

            ['field' => 'pembayaran',
            'label' => 'Description',
            'rules' => 'required'],

            ['field' => 'no_rek',
            'label' => 'No',
            'rules' => 'required'],

            ['field' => 'nama_bank',
            'label' => 'Description',
            'rules' => 'required'],

            ['field' => 'atas_nama',
            'label' => 'Description',
            'rules' => 'required'],
        ];
    }

    public function edit_rules()
    {
        return [
             ['field' => 'id_bayar',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'id_transaksi',
            'label' => 'No',
            'rules' => 'numeric'],
            
            ['field' => 'tgl_bayar',
            'label' => 'No',
            'rules' => 'required'],

            ['field' => 'pembayaran',
            'label' => 'Description',
            'rules' => 'required'],

            ['field' => 'no_rek',
            'label' => 'No',
            'rules' => 'required'],

            ['field' => 'nama_bank',
            'label' => 'Description',
            'rules' => 'required'],

            ['field' => 'atas_nama',
            'label' => 'Description',
            'rules' => 'required'],
           
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pembayaran" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_bayar = uniqid();
        $this->id_transaksi = $post["id_transaksi"];
        $this->tgl_bayar = md5($post["tgl_bayar"]);
        $this->pembayaran = md5($post["pembayaran"]);
        $this->no_rek = md5($post["no_rek"]);
        $this->nama_bank = md5($post["nama_bank"]);
        $this->atas_nama = md5($post["atas_nama"]);
        $this->db->insert($this->_table, $this);
    }

    public function update($user)
    {
        $post = $this->input->post();
        $this->id_pembayaran = $post["id"];
        $this->db->update($this->_table, $user, array('id_pembayaran' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pembayaran" => $id));
    }

    public function get_view(){
        $query = $this->db->query("SELECT * FROM tb_pembayaran");
        return $query->result();
    }
}
?>