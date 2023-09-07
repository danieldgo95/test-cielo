<?php
class Usuario extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Método para crear un nuevo usuario
	public function crear_usuario($data)
	{
		return $this->db->insert('usuarios', $data);
	}

	// Método para obtener todos los usuarios
	public function obtener_usuarios()
	{
		$query = $this->db->get('usuarios');
		return $query->result_array();
	}

	// Método para obtener un usuario por su ID
	public function obtener_usuario_por_id($id)
	{
		$query = $this->db->get_where('usuarios', ['id' => $id]);
		return $query->row_array();
	}

	// Método para actualizar un usuario
	public function actualizar_usuario($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('usuarios', $data);
	}

	// Método para eliminar un usuario por su ID
	public function eliminar_usuario($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('usuarios');
	}
}
