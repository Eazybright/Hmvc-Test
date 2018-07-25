<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Tasks extends MX_Controller {
		function __construct(){
			parent::__construct();

			$this->load->model('tasks_model');
		}

		public function index(){
			$data['query'] = $this->tasks_model->get('priority');
			$data['module'] = 'tasks';
			$data['view_file'] = 'display';

			echo Modules::run('template/two_col', $data);
		}

		function create(){
			$update_id = $this->uri->segment(3);
			if(!isset($update_id)){
				$update_id = $this->input->post('id', $id);
			}
			if(is_numeric($update_id)){
				$data = $this->get_data_from_db($update_id);
			}else{
				$data = $this->get_data_from_post();
			}
			echo $data['title'];

			$data = $this->get_data_from_post();
			$data['module'] = 'tasks';
			$data['view_file'] ='form';
			echo Modules::run('template/two_col', $data);
		}

		function get_data_from_post(){
			$data['title'] = $this->input->post('title', TRUE);
			$data['priority'] = $this->input->post('priority', TRUE);
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->tasks_model->get_where($update_id);
			foreach($query->result() as $row){
				$data['title'] = $row->title;
				$data['priority'] = $row->priority;
			}
			return $data;
		}

		function submit(){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|xss_clean');
			$this->form_validation->set_rules('priority', 'Priority', 'required|numeric|max_length[2]|xss_clean');

			$update_id = $this->input->post('update_id', TRUE);


			if ($this->form_validation->run() == FALSE){
				$this->create();
			}else{
				$data = $this->get_data_from_post();
				if(is_numeric($update_id)){
					$thiss->tasks_model->update($update_id, $data);
				}else{
					$this->tasks_model->insert($data);
				}
				redirect('tasks');
			}
		}
		
	}
