<?php

class CRUD extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CRUD_model');
	}
	function index()
	{
		$data['all_users'] = $this->CoreUser_model->fetchAll();
		$this->load->view('crud/list', $data);
	}

	function add($id = null)
	{
		// Check method get/post
		if ($this->input->method() == 'post') {
			// Insert or Update
			$this->CRUD_model->add();
		} else {
			$data['record'] = [];
			if ($id != null)
				$data['record'] = $this->CRUD_model->fetchOne($id);
			$this->load->view('crud/add', $data);
		}
	}
}
