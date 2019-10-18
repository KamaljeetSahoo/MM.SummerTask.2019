<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('id', 'ASC');
				$query = $this->db->get('articles');
				return $query->result_array();
				print_r($query);
			}

			$query = $this->db->get_where('articles', array('slug' => $slug));
			return $query->row_array();
		}

		public function set_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'content' => $this->input->post('content'),
				'category' => $this->input->post('category')
			);

			return $this->db->insert('articles', $data);
		}

		public function delete_article($id){
			$this->db->where('id', $id);
			$this->db->delete('articles');
			return true;
		}

		public function update_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'content' => $this->input->post('content'),
				'category' => $this->input->post('category')
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('articles', $data);
		}
	}