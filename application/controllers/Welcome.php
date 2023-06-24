<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function index()
	{

		$data['all_users'] = $this->CoreUser_model->fetchAll();
		$this->load->view('core/user-list', $data);
	}

	// Add USer
	function add()
	{
		$this->load->view('core/add');
	}


	function add_user_data()
	{

		$this->CoreUser_model->add();
	}


	// Edit and Update Data

	function edit($id)
	{

		$data['record'] = $this->CoreUser_model->fetchOne($id);
		$this->load->view('core/edit', $data);
	}

	function update_user_data()
	{

		$this->CoreUser_model->update();
	}

	// Delete User Data
	function delete($id)
	{

		$this->CoreUser_model->delete($id);
	}
}
