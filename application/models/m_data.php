<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_user');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}