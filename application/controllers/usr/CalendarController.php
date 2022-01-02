<?php

class CalendarController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_logged') == false){
            redirect('sign-in');
        }
        $this->load->model('User');       
    }
    public function index(){
        $dataUser = $this->User->getAll();
        $data['title']      = "Calendar";
        $data['user']      = $dataUser;

        $this->template->user('usr/VCalendar', $data);
    }
}