<?php
	class Admin_model extends CI_Model{
		public function__construct(){
			$this->load->database();
		}
		
		public function user_registration(){
			echo "pura chaluchi";
			$data = array(
					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => $_POST['password']
				);

			return $this->db->insert('users', $data);
		}