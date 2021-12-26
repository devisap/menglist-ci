<?php

class FolderController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('is_logged'))){
            redirect('sign-in');
        }
        $this->load->model('Folder');
        $this->load->model('Task');
    }
    public function vFolder($id){
        $data['title'] = 'Folder';
        $data['tasks'] = $this->Task->get(['ID_FOLDER' => $id]);

        $this->template->user('usr/VFolder', $data);
    }
    public function store(){
        $this->Folder->insert($_POST);
        redirect('folder');
    }
    
}