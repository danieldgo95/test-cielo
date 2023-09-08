<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RatingController extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model("rating");
    }

    public function index(){
        $ratings = $this->rating->get_ratings();
        $data = [
            'ratings' => $ratings
        ];
        $this->load->view('/templates/header');
		$this->load->view('/ratings/management_ratings', $data);
		$this->load->view('/templates/footer');
    }

    public function create(){
        $this->load->view('/templates/header');
		$this->load->view('/ratings/management_ratings');
		$this->load->view('/templates/footer');
    }

    public function save(){
        $data = array(
			'id_user' => $this->input->post('id_user'),
			'id_movie' => $this->input->post('id_movie'),
            'rating' => $this->input->post('rating')
		);
		$this->rating->create_ratings($data);
    } 

    public function edit($id){
        $data['rating'] = $this->rating->get_rating_by_id($id);
        $this->load->view('ratings/update', $data);
    }

    public function update($id){
        $data = [
            'id_user' => $this->input->post('id_user'),
			'id_movie' => $this->input->post('id_movie'),
            'rating' => $this->input->post('rating')
        ];
        $this->rating->update_rating($id,$data);
        redirect('ratings');
    }

    public function delete($id)
	{
		$this->rating->delete_rating($id);
		redirect('ratings'); // Redirige de nuevo a la lista de usuarios
	}
}