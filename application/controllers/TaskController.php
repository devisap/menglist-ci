<?php

class TaskController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('is_logged'))){
            redirect('sign-in');
        }
    }
    public function index(){
        $this->load->view('VTask');
    }
}