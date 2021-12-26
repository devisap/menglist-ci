<?php

class TagController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('is_logged'))){
            redirect('sign-in');
        }
        $this->load->model('Tag');
    }
    public function vTag(){
        $data['title'] = 'Tag';
        $this->template->user('usr/VTags', $data);
    }
    public function store(){
        $this->Tag->insert($_POST);
        redirect('tags/23');
    }
}