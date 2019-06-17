<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_pengembalian extends CI_Model
{
    private $_table = "tb_pengembalian";

    public $id_pengembalian;
    public $id_transaksi;
    public $harga;
    public $terlambat;

    public function rules()
    {
        return [
            ['field' => 'id_pengembalian',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'id_transaksi',
            'label' => 'No',
            'rules' => 'numeric'],
            
            ['field' => 'harga',
            'label' => 'Description',
            'rules' => 'required']

            ['field' => 'terlambat',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function edit_rules()
    {
        return [
           ['field' => 'id_pengembalian',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'id_transaksi',
            'label' => 'username',
            'rules' => 'required'],
            
            ['field' => 'harga',
            'label' => 'Description',
            'rules' => 'required']

            ['field' => 'terlambat',
            'label' => 'Description',
            'rules' => 'required']
           ], 
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pengembalian = uniqid();
        $this->id_transaksi = $post["id_transaksi"];
        $this->harga = md5($post["harga"]);
        $this->terlambat = md5($post["terlambat"]);
        $this->db->insert($this->_table, $this);
    }

    public function update($user)
    {
        $post = $this->input->post();
        $this->id_pengembalian = $post["id"];
        $this->db->update($this->_table, $user, array('id_pengembalian' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pengembalian" => $id));
    }

    public function get_view(){
        $query = $this->db->query("SELECT * FROM tb_pengembalian");
        return $query->result();
    }
}
?>