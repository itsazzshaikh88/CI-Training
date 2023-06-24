<?php

class CRUD_model extends CI_Model
{
	function add()
	{
		$data = $this->input->post();
		// fetch current id 
		$__id = $data['ID'];
		// unset data which is not required
		unset($data['ID']);
		// check data of this $__id is exist in table
		$exist = $this->fetchOne($__id);
		if ($exist == null) {
			// Insert data in table
			$data['USER_ID'] = sprintf("%04d", rand(1, 9999));
			$data['CREATED_AT'] = date('Y-m-d');
			$data['CREATED_BY'] = 1;
			// insert data in table
			if ($this->db->insert('users', $data)) {
				redirect(base_url('crud'));
			} else {
				redirect(base_url('crud/add'));
			}
		} else {
			// update data in table
			$data['UPDATED_AT'] = date('Y-m-d');
			$data['CREATED_BY'] = 1;
			$this->db->where('ID', $__id);
			if ($this->db->update('users', $data)) {
				redirect(base_url('crud'));
			} else {
				redirect(base_url('crud/add/' . $__id));
			}
		}
	}

	function fetchOne($id)
	{
		return $this->db->where('ID', $id)->get('users')->row_array();
	}
}
