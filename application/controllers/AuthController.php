<?php

class AuthController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
    }
    public function vSignIn(){
        $this->load->view('VLogin');       
    }
    public function vSignUp(){
        $this->load->view('VSignUp');
    }
    public function vSignOut(){
        $this->load->view('VLogin');
    }
    public function login(){

    }
    public function register(){
        $param = $_POST;
        $this->User->insert($param);

        $this->session->set_userdata();
        redirect('sign-in');
    }
}