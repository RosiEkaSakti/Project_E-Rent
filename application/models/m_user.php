<?php

	

	class m_user extends CI_Model {

		public function getAdmin() {
		$hsl = $this->db->query("select * from tb_user");
		return $hsl;
		}
	}