<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_pelanggan extends CI_Model
{
    private $_table = "tb_pelanggan";

    public $id_pelanggan;
    public $no_ktp;
    public $foto_pelanggan;
    public $nama_lengkap;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $username;
    public $password;
    public $alamat_pelanggan; 
    public $no_telepon; 
    public $email;
    public $status_peminjaman;


    public function rules()
    {
        return [
            ['field' => 'id_pelanggan',
            'label' => 'No',
            'rules' => 'numeric'],

             ['field' => 'no_ktp',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'foto_pelanggan',
            'label' => 'image',
            'rules' => 'required'],
            
            ['field' => 'nama_lengkap',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'tanggal_lahir',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'jenis_kelamin',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'username',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'password',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'alamat_pelanggan',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'no_telepon',
            'label' => 'label',
            'rules' => 'required'],


             ['field' => 'email',
            'label' => 'label',
            'rules' => 'required'],


             ['field' => 'status_peminjaman',
            'label' => 'label',
            'rules' => 'required'],
        ];
    }

    public function edit_rules()
    {
        return [
            ['field' => 'id_pelanggan',
            'label' => 'No',
            'rules' => 'numeric'],

             ['field' => 'no_ktp',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'foto_pelanggan',
            'label' => 'image',
            'rules' => 'required'],
            
            ['field' => 'nama_lengkap',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'tanggal_lahir',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'jenis_kelamin',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'username',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'password',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'alamat_pelanggan',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'no_telepon',
            'label' => 'label',
            'rules' => 'required'],


             ['field' => 'email',
            'label' => 'label',
            'rules' => 'required'],


             ['field' => 'status_peminjaman',
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
        return $this->db->get_where($this->_table, ["id_pelanggan" => $id])->row();
    }

    public function save()
    {
         $post = $this->input->post();
        $this->id_pelanggan = $post["id_pelanggan"];
        $this->no_ktp = $post["no_ktp"];
        $this->foto_pelanggan = ($post["foto_pelanggan"]);
        $this->nama_lengkap = ($post["nama_lengkap"]);
        $this->tanggal_lahir = ($post["tanggal_lahir"]);
        $this->jenis_kelamin = ($post["jenis_kelamin"]);
        $this->username = ($post["username"]);
        $this->password = ($post["password"]);
        $this->alamat_pelanggan = ($post["alamat_pelanggan"]);
        $this->no_telepon = ($post["no_telepon"]);
        $this->email = ($post["email"]);
        $this->status_peminjaman = ($post["status_peminjaman"]);
        $this->db->insert($this->_table, $this);
    }

    public function update($user)
    {
        $post = $this->input->post();
        $this->id_pelanggan = $post["id"];
        $this->db->update($this->_table, $user, array('id_pelanggan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pelanggan" => $id));
    }

    public function get_view(){
        $query = $this->db->query("SELECT * FROM tb_pelanggan");
        return $query->result();
    }
}
?>