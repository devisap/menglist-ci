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
    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    public function login(){
        $param = $_POST;
        $user = $this->User->getById($param['EMAIL_USER']);
        if($user != null){
            if($user->PASSWORD_USER == hash('sha256', md5($param['PASSWORD_USER']))){
                $this->setSession($param['EMAIL_USER'], $param['PASSWORD_USER']);
                redirect('task');
            }else{
                $this->session->set_flashdata('err_msg', 'User nad password not match!');
            }
        }else{
            $this->session->set_flashdata('err_msg', 'User not found!');
        }
        redirect('sign-in');
    }
    public function register(){
        $param = $_POST;
        $param['PASSWORD_USER'] = hash('sha256', md5($param['PASSWORD_USER']));
        
        $this->User->insert($param);
        $this->setSession($param['EMAIL_USER'], $param['NAMA_USER']);
        redirect('task');
    }
    public function setSession($email, $nama){
        $this->session->set_userdata('email', $email);
        $this->session->set_userdata('nama', $nama);
        $this->session->set_userdata('is_logged', true);
    }
}