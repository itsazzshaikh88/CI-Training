<?php

class Template_model extends CI_Model
{
	function add()
	{
		// save data in array
		$data = $this->input->post();
		// get ID from array
		$__id = $data['ID'];
		// unset ID from array
		unset($data['ID']);
		// check data of current ID is exist or not
		$exist = $this->fetchOne($__id);
		if ($exist == null) {
			// insert
			$data['USER_ID'] = sprintf("%04d", rand(1, 9999));
			$data['CREATED_AT'] = date('Y-m-d');
			$data['CREATED_BY'] = 1;
			// insert data in table
			if ($this->db->insert('users', $data)) {
				redirect(base_url('template'));
			} else {
				redirect(base_url('template/add'));
			}
		} else {
			// update
			$data['UPDATED_AT'] = date('Y-m-d');
			$data['UPDATED_BY'] = 1;
			// update table data
			$this->db->where('ID', $__id);
			if ($this->db->update('users', $data)) {
				redirect(base_url('template'));
			} else {
				redirect(base_url('template/add/' . $__id));
			}
		}
	}
	function fetchOne($id)
	{
		return $this->db->where('ID', $id)->get('users')->row_array();
	}
	function delete($id)
	{
		$this->db->where('ID', $id)->delete('users');
		redirect(base_url('template'));
	}
}
