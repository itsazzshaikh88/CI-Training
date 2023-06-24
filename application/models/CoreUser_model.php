<?php

class CoreUser_model extends CI_Model
{
	function add()
	{
		$user_id = sprintf("%04d", rand(1, 9999));
		$data = array(
			'USER_ID' => $user_id,
			'NAME' => $this->input->post('username'),
			'EMAIL' => $this->input->post('email'),
			'PASSWORD' => $this->input->post('password'),
			'CREATED_AT' => date('Y-m-d'),
			'CREATED_BY' => 1,
		);
		if ($this->db->insert('users', $data)) {
			redirect(base_url());
		} else {
			redirect(base_url('welcome/add'));
		}
	}
	function fetchAll()
	{
		return $this->db->get('users')->result_array();
	}

	function fetchOne($id)
	{
		return $this->db->where('ID', $id)->get('users')->row_array();
	}

	function update()
	{
		$id = $this->input->post('ID');
		$data = array(
			'NAME' => $this->input->post('username'),
			'EMAIL' => $this->input->post('email'),
			'UPDATED_AT' => date('Y-m-d'),
			'UPDATED_BY' => 1,
		);
		$this->db->where('ID', $id);
		if ($this->db->update('users', $data)) {
			redirect(base_url());
		} else {
			redirect(base_url('welcome/edit/' . $id));
		}
	}

	function delete($id)
	{
		$this->db->where('ID', $id);
		$this->db->delete('users');
		redirect(base_url());
	}
}
