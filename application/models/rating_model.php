<?php
class RatingModel extends CI_Model {
    public function __construct(){
        parent::__construct();
		$this->load->database();
    }
    public function create_ratings($data)
	{
		return $this->db->insert('ratings', $data);
	}

	public function get_ratings()
	{
		$query = $this->db->get('ratings');
		return $query->result_array();
	}

	public function get_rating_by_id($id)
	{
		$query = $this->db->get_where('ratings', ['id' => $id]);
		return $query->row_array();
	}

	public function update_rating($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('ratings', $data);
	}

	public function delete_rating($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('ratings');
	}
}