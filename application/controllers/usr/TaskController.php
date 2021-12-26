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
        $data['title'] = "Task";
        $this->template->user('usr/VTask', $data);
    }
    public function store(){
        print_r($_POST);      
    }
}