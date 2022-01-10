<?php

class UserController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
    }
    public function vDaftarUser(){
        $dataUser = $this->User->getAll();

        $data['title']      = "List User";
        $data['user']      = $dataUser;

		$this->template->admin('admin/VUser', $data);
    }
    
}