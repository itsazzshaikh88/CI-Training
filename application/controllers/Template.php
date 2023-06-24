<?php

class Template extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Template_model');
	}
	function index()
	{
		$data['page_title'] = 'User List';
		$data['title'] = 'User List';
		$data['all_users'] = $this->CoreUser_model->fetchAll();
		$data['view_path'] = 'template/list';
		$this->load->view('template', $data);
	}

	function add($id = null, $action = null)
	{
		if ($this->input->method() == 'post') {
			// save data
			$this->Template_model->add();
		} else {
			$data['record'] = [];
			if ($id != null) {
				if ($action == 'delete') {
					// delete
					$this->Template_model->delete($id);
				} else {
					$data['record'] = $this->Template_model->fetchOne($id);
				}
			}
			$data['page_title'] = $id == null ? 'Add User' : 'Update User';
			$data['title'] = $id == null ? 'Add User' : 'Update User';
			$data['view_path'] = 'template/add';
			$this->load->view('template', $data);
		}
	}
}
