<?php
class UserModel extends CI_Model {
    public function __construct(){
        parent::__construct();
		$this->load->database();
    }
    public function create_users($data)
	{
		return $this->db->insert('users', $data);
	}

	public function get_users()
	{
		$query = $this->db->get('users');
		return $query->result_array();
	}

	public function get_user_by_id($id)
	{
		$query = $this->db->get_where('users', ['id' => $id]);
		return $query->row_array();
	}

	public function update_user($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('users', $data);
	}

	public function delete_user($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('users');
	}
}