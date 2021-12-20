<?php

class TaskController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('is_logged'))){
            redirect('sign-in');
        }
        $this->load->model('Task');
    }
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('VTask');
        $this->load->view('templates/footer');
    }
    public function store(){
        print_r($_POST);      
    }
}