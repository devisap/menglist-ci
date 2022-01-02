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
    public function login(){
        $param = $_POST;
        $user = $this->User->getById($param['EMAIL_USER']);
        if($user != null){
            if($user->PASSWORD_USER == hash('sha256', md5($param['PASSWORD_USER']))){
                $this->setSession($user->EMAIL_USER, $user->NAMA_USER, $user->ISPREMIUM_USER);
                redirect('task');
            }
        }
        
        $this->session->set_flashdata('err_msg', 'User and password incorrect!');
        redirect('sign-in');
    }
    public function register(){
        $param = $_POST;
        $param['PASSWORD_USER'] = hash('sha256', md5($param['PASSWORD_USER']));
        
        $this->User->insert($param);
        $user = $this->User->getById($param['EMAIL_USER']);
        $this->setSession($user->EMAIL_USER, $user->NAMA_USER, $user->ISPREMIUM_USER);
        redirect('task');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    public function setSession($email, $nama, $isPremium){
        $this->session->set_userdata('email', $email);
        $this->session->set_userdata('nama', $nama);
        $this->session->set_userdata('is_premium', $isPremium);
        $this->session->set_userdata('is_logged', true);
    }
}