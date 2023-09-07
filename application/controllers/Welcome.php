<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("usuario");
	}
	public function index()
	{
		$usuarios = $this->usuario->obtener_usuarios();
		$data = [
			'usuarios' => $usuarios,
		];
		$this->load->view('/templates/header');
		$this->load->view('/welcome/index', $data);
		$this->load->view('/templates/footer');
	}

	// Mostrar el formulario de creación de usuario
	public function crear()
	{
		$this->load->view('usuarios/crear');
	}

	// Procesar el formulario de creación de usuario
	public function guardar()
	{
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'email' => $this->input->post('email'),
			// Otros campos del usuario
		);

		$this->usuario->crear_usuario($data);
		redirect('usuarios'); // Redirige de nuevo a la lista de usuarios
	}

	// Mostrar el formulario de edición de usuario
	public function editar($id)
	{
		$data['usuario'] = $this->usuario->obtener_usuario_por_id($id);
		$this->load->view('usuarios/editar', $data);
	}

	// Procesar el formulario de edición de usuario
	public function actualizar($id)
	{
		$data = [
			'nombre' => $this->input->post('nombre'),
			'email' => $this->input->post('email'),
			// Otros campos del usuario
		];

		$this->usuario->actualizar_usuario($id, $data);
		redirect('usuarios'); // Redirige de nuevo a la lista de usuarios
	}

	// Eliminar un usuario
	public function eliminar($id)
	{
		$this->usuario->eliminar_usuario($id);
		redirect('usuarios'); // Redirige de nuevo a la lista de usuarios
	}
}
