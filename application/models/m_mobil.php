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
            // ['field' => 'foto_mobil',
            // 'label' => 'image',
            // 'rules' => 'required'],
            
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
            
            // ['field' => 'id_jenis',
            // 'label' => 'no',
            // 'rules' => 'required'],

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

        // $this->id_mobil = $post["No"];
        $this->foto_mobil = '';
=======
        $this->id_mobil = $post["id_mobil"];
        $this->foto_mobil = $post["foto_mobil"];
<<<<<<< HEAD
        $this->type_mobil = ($post["type_mobil"]);
        $this->id_jenis = ($post["id_jenis"]);
        $this->merk = ($post["merk"]);
        $this->no_polisi = ($post["no_polisi"]);
        $this->warna = ($post["warna"]);
        $this->harga = ($post["harga"]);
        $this->status = ($post["status"]);
=======
>>>>>>> 503e4e41d93b8bbf03ed07dcf1a6e2cdecbd347c
        $this->id_jenis = $post["id_jenis"];
        $this->type_mobil = $post["type_mobil"];
        $this->merk = $post["merk"];
        $this->no_polisi = $post["no_polisi"];
        $this->harga = $post["harga"];
        $this->status = $post["status"];
<<<<<<< HEAD
        $this->warna = $post["warna"];
=======
>>>>>>> 4c0afe99945d19951cf85118a0aaaca8ddc64c70
>>>>>>> 503e4e41d93b8bbf03ed07dcf1a6e2cdecbd347c
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id_mobil = $post["id_mobil"];
        $this->foto_mobil = '';
        $this->id_jenis = $post["id_jenis"];
        $this->type_mobil = $post["type_mobil"];
        $this->merk = $post["merk"];
        $this->no_polisi = $post["no_polisi"];
        $this->harga = $post["harga"];
        $this->status = $post["status"];
        $this->warna = $post["warna"];
        $this->db->update($this->_table, $this, ['id_mobil' => $post['id_mobil']]);
        // $this->id_mobil = $post["id"];
        // $this->db->update($this->_table, $user, array("id_mobil" => $post['id']));
    }

    

    public function delete($id)
    {
        $this->db->delete($this->_table, ['id_mobil' => $id]);
        // return $this->db->delete($this->_table, array("id_mobil" => $id));
    }

    public function get_view(){
        $query = $this->db->query("SELECT m.*, j.nama_jenis FROM tb_mobil m JOIN tb_jenis j ON j.id_jenis = m.id_jenis");
        return $query->result();
    }

    public function getJenis()
    {
        $jenis = $this->db->get('tb_jenis')->result_array();
        return $jenis;
    }
}
?>