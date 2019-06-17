<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_mobil extends CI_Model
{
    private $_table = "tb_mobil";
    public $id_mobil;
    public $foto_mobil;
    public $id_jenis;
    public $type_mobil;
    public $merk;
    public $no_polisi;
    public $harga;
    public $status;  


    public function rules()
    {
        return [
            ['field' => 'id_mobil',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'foto_mobil',
            'label' => 'image',
            'rules' => 'required'],
            
            ['field' => 'id_jenis',
            'label' => 'no',
            'rules' => 'required'],

             ['field' => 'type_mobil',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'merk',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'no_polisi',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'warna',
            'label' => 'colour',
            'rules' => 'required'],

             ['field' => 'harga',
            'label' => 'no',
            'rules' => 'required'],

             ['field' => 'status',
            'label' => 'label',
            'rules' => 'required']
        ];
    }

    public function edit_rules()
    {
        return [
           ['field' => 'id_mobil',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'foto_mobil',
            'label' => 'image',
            'rules' => 'required'],
            
            ['field' => 'id_jenis',
            'label' => 'no',
            'rules' => 'required'],

             ['field' => 'type_mobil',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'merk',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'no_polisi',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'warna',
            'label' => 'colour',
            'rules' => 'required'],

             ['field' => 'harga',
            'label' => 'no',
            'rules' => 'required'],

             ['field' => 'status',
            'label' => 'label',
            'rules' => 'required'], 
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_mobil" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_mobil = $post["id_mobil"];
        $this->foto_mobil = $post["foto_mobil"];
        $this->id_jenis = $post["id_jenis"];
        $this->type_mobil = $post["type_mobil"];
        $this->merk = $post["merk"];
        $this->no_polisi = $post["no_polisi"];
        $this->harga = $post["harga"];
        $this->status = $post["status"];
        $this->db->insert($this->_table, $this);
    }

    public function update($user)
    {
        $post = $this->input->post();
        $this->id_mobil = $post["id_mobil"];
        $this->db->update($this->tb_mobil, $user, array("id_mobil" => $post['id_mobil']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->tb_mobil, array("id_mobil" => $id));
    }

    public function get_view(){
        $query = $this->db->query("SELECT * FROM tb_mobil");
        return $query->result();
    }
}
?>