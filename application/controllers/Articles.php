<?php
	class Articles extends CI_Controller{
		public function index(){

			$data['title'] = 'Articles';

			$data['articles'] = $this->post_model->get_posts();

			$this->load->view('templates/header');
			$this->load->view('articles/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL){
			$data['articles'] = $this->post_model->get_posts($slug);

			if(empty($data['articles'])){
				show_404();
			}

			$data['title'] = $data['articles']['title'];

			$this->load->view('templates/header');
			$this->load->view('articles/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			$data['title'] = 'Create articles';

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('content', 'Content', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('articles/create', $data);
				$this->load->view('templates/footer');
			}
			else{
				$this->post_model->set_post();
				redirect('articles');
			}
		}

		public function delete($id){
			$this->post_model->delete_article($id);
			redirect('articles');
		}

		public function edit($id){
			$data['articles'] = $this->post_model->update_post($id);

			if(empty($data['articles'])){
				show_404();
			}

			$data['title'] = 'Edit Article';

			$this->load->view('templates/header');
			$this->load->view('articles/edit', $data);
			$this->load->view('templates/footer');
			redirect('articles');
		}

		public function update(){
			$this->post_model->update_post();
			redirect('articles');
		}
	}