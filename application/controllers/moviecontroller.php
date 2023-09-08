<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MovieController extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model("movie");
    }

    public function index(){
        $movies = $this->movie->get_movies();
        $data = [
            'movies' => $movies
        ];
        $this->load->view('/templates/header');
		$this->load->view('/movies/management_movies', $data);
		$this->load->view('/templates/footer');
    }

    public function create(){
        $this->load->view('/templates/header');
		$this->load->view('/movies/management_movies');
		$this->load->view('/templates/footer');
    }

    public function save(){
        $data = [
			'title' => $this->input->post('title'),
			'genre' => $this->input->post('genre'),
            'release_date' => $this->input->post('release_date'),
		];
		$this->movie->create_movies($data);
    } 

    public function edit($id){
        $data['movie'] = $this->movie->get_movie_by_id($id);
        $this->load->view('movies/management_movies', $data);
    }

    public function update($id){
        $data = [
            'title' => $this->input->post('title'),
			'genre' => $this->input->post('genre'),
            'release_date' => $this->input->post('release_date')
        ];
        $this->movie->update_movie($id,$data);
        redirect('movies');
    }

    public function delete($id)
	{
		$this->movie->delete_movie($id);
		redirect('movies');
	}
}