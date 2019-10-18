<?php

	class Admin extends CI_Controller{

		public function register(){

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('r_password', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() == TRUE){

				$data = array(
					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => $_POST['password']
				);

				$this->db->insert('users', $data);

				$this->session->set_flashdata("success","Your account has been registered, You can login now");
				redirect('admin');

			}

			else{
				$this->load->view('templates/header');
				$this->load->view('pages/admin');
				$this->load->view('templates/footer');

			}
		}

		public function login(){
			$this->load->view('templates/header');
			$this->load->view('admin/login');
			$this->load->view('templates/footer');
		}

		public function login_user(){
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() == TRUE){

				$username = $_POST['username'];
				$password = $_POST['password'];


				$this->db->select('*');
				$this->db->from('users');
				$this->db->where(array('username' => $username, 'password' => $password));
				$query = $this->db->get();

				$user = $query->row();

				if($user->email){
					$this->session->set_flashdata("success", "You are logged in");

					$_SESSION['user_logged'] = TRUE;
					$_SESSION['username'] = $user->username;

					echo "everything is just fine";
				}
				else{
					$this->session->set_flashdata("error", "Invalid Credentials");
					$this->load->view('templates/header');
					$this->load->view('admin/login');
					$this->load->view('templates/footer');
				}

			}
			else{
				$this->load->view('templates/header');
				$this->load->view('admin/login');
				$this->load->view('templates/footer');
			}
		}
	}