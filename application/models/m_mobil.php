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
    public $warna;
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
<<<<<<< HEAD
        $this->id_mobil = $post["No"];
        $this->foto_mobil = $post["image"];
        $this->id_jenis = $post["no"];
        $this->type_mobil = $post["label"];
        $this->merk = $post["label"];
        $this->no_polisi = $post["label"];
        $this->harga = $post["no"];
        $this->status = $post["label"];
=======
        $this->id_mobil = $post["id_mobil"];
        $this->foto_mobil = $post["foto_mobil"];
        $this->type_mobil = ($post["type_mobil"]);
        $this->id_jenis = ($post["id_jenis"]);
        $this->merk = ($post["merk"]);
        $this->no_polisi = ($post["no_polisi"]);
        $this->warna = ($post["warna"]);
        $this->harga = ($post["harga"]);
        $this->status = ($post["status"]);
>>>>>>> 5963590502f696ee1e041e01da669fbe18609053
        $this->db->insert($this->_table, $this);
    }

    public function update($user)
    {
        $post = $this->input->post();
<<<<<<< HEAD
        $this->id_mobil = $post["id_mobil"];
        $this->db->update($this->_table, $user, array("id_mobil" => $id['id_mobil']));
=======
        $this->id_mobil = $post["id"];
        $this->db->update($this->_table, $user, array("id_mobil" => $post['id']));
>>>>>>> 5963590502f696ee1e041e01da669fbe18609053
    }

    public function delete($id)
    {
<<<<<<< HEAD
        return $this->db->delete($this->_table, array("id_mobil" => $id['id_mobil']));
=======
        return $this->db->delete($this->_table, array("id_mobil" => $id));
>>>>>>> 5963590502f696ee1e041e01da669fbe18609053
    }

    public function get_view(){
        $query = $this->db->query("SELECT * FROM tb_mobil");
        return $query->result();
    }
}
?>