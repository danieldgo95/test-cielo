<?php
class MovieModel extends CI_Model {
    public function __construct(){
        parent::__construct();
		$this->load->database();
    }
    public function create_movies($data)
	{
		return $this->db->insert('movies', $data);
	}

	public function get_movies()
	{
		$query = $this->db->get('movies');
		return $query->result_array();
	}

	public function get_movie_by_id($id)
	{
		$query = $this->db->get_where('movies', ['id' => $id]);
		return $query->row_array();
	}

	public function update_movie($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('movies', $data);
	}

	public function delete_movie($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('movies');
	}
}