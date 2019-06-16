<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_Model
{
    private $_table = "tb_user";

    public $id_user;
    public $username;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'id_user',
            'label' => 'No',
            'rules' => 'numeric'],

            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],
            
            ['field' => 'password',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function edit_rules()
    {
        return [
           ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'
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
        $this->id_user = uniqid();
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->db->insert($this->_table, $this);
    }

    public function update($user)
    {
        $post = $this->input->post();
        $this->id_user = $post["id"];
        $this->db->update($this->_table, $user, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }

    public function get_view(){
        $query = $this->db->query("SELECT * FROM tb_user");
        return $query->result();
    }
}
?>