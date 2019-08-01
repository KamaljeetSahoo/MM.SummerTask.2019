<?php
	class Articles extends CI_Controller{
		public function index(){

			$data['title'] = 'Articles';

			$this->load->view('templates/header');
			$this->load->view('articles/index', $data);
			$this->load->view('templates/footer');
		}
	}