<?php

	class Admin extends CI_Controller{

		public function register(){
			// $data['users'] = $this->post_model->get_posts();
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique');
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique');
			$this->form_validation->set_rules('password', 'Password', 'required');
			//$this->form_validation->set_rules('r_password', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){

				$this->load->view('templates/header');
				$this->load->view('pages/admin', $data);
				$this->load->view('templates/footer');

			} else {
				$enc_password = md5($this->input->post('password'));
				$data = array(
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password
			);
				$this->Admin_model->register($data);
				$this->session->set_flashdata('admin_registered', 'You are now registered and can log in as a admin');
				echo ['$data'];
				//redirect('pages/admin');
			}
		}
	}