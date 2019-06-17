<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_transaksibiaya extends CI_Model
{
    private $_table = "tb_transaksi";

    public $id_transaksi;
    public $id_mobil;
    public $harga;
    public $id_pelanggan;
    public $nama_lengkap;
    public $tgl_sewa;
    public $tgl_selesaisewa;
    public $jumlah_harga;
    public $denda;
    public $status_pembayaran;
    public $status_pengembalian;

    public function rules()
    {
        return [
            ['field' => 'id_transaksi',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'id_mobil',
            'label' => 'image',
            'rules' => 'required'],
            
            ['field' => 'harga',
            'label' => 'no',
            'rules' => 'required'],

             ['field' => 'id_pelanggan',
            'label' => 'no',
            'rules' => 'required'],

             ['field' => 'nama_lengkap',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'tgl_sewa',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'tgl_selesaisewa',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'jumlah_harga',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'denda',
            'label' => 'colour',
            'rules' => 'required'],

             ['field' => 'status_pembayaran',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'status_pengembalian',
            'label' => 'label',
            'rules' => 'required'],

        ];
    }

    public function edit_rules()
    {
        return [
          ['field' => 'id_transaksi',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'id_mobil',
            'label' => 'image',
            'rules' => 'required'],
            
            ['field' => 'harga',
            'label' => 'no',
            'rules' => 'required'],

             ['field' => 'id_pelanggan',
            'label' => 'no',
            'rules' => 'required'],

             ['field' => 'nama_lengkap',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'tgl_sewa',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'tgl_selesaisewa',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'jumlah_harga',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'denda',
            'label' => 'colour',
            'rules' => 'required'],

             ['field' => 'status_pembayaran',
            'label' => 'label',
            'rules' => 'required'],

             ['field' => 'status_pengembalian',
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
        return $this->db->get_where($this->_table, ["id_transaksi" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_transaksibiaya = $post["id_transaksi"];
        $this->tgl_sewa = $post["tgl_sewa"];
        $this->id_mobil = $post["id_mobil"];
        $this->no_ktp = ($post["no_ktp"]);
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
        $this->db->update($this->_table, $user, array("id_transaksi" => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_transaksi" => $id));
    }

    public function get_view(){
        $query = $this->db->query("SELECT * FROM tb_transaksi");
        return $query->result();
    }
}
?>