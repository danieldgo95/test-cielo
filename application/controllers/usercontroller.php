<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model("user");
    }

    public function index(){
        $users = $this->user->get_users();
        $data = [
            'users' => $users
        ];
        $this->load->view('/templates/header');
		$this->load->view('/users/form_create', $data);
		$this->load->view('/templates/footer');
    }

    public function create(){
        $this->load->view('/templates/header');
		$this->load->view('/users/form_create');
		$this->load->view('/templates/footer');
    }

    public function save(){
        $data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'country' => $this->input->post('country')
		);
		$this->user->create_users($data);
    } 

    public function edit($id){
        $data['user'] = $this->user->get_user_by_id($id);
        $this->load->view('users/update', $data);
    }

    public function update($id){
        $data = [
           'first_name' => $this->input->post('first_name'),
           'last_nmae' => $this->input->post('last_name'),
           'email' => $this->input->post('email'),
           'gender' => $this->input->post('gender'),
           'country' => $this->input->post('country')
        ];
        $this->user->update_user($id,$data);
        redirect('users');
    }

    public function delete($id)
	{
		$this->user->delete_user($id);
		redirect('users'); // Redirige de nuevo a la lista de usuarios
	}
}