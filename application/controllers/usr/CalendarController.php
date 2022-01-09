<?php

class CalendarController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_logged') == false){
            redirect('sign-in');
        }
        $this->load->model('User');       
        $this->load->model('Task');
    }
    public function index(){
        $dataUser = $this->User->getAll();
        $data['title']     = "Calendar";
        $data['user']      = $dataUser;
        $data['folders']   = $this->General->get('folder', ['EMAIL_USER' => $this->session->userdata('email')]);
        $data['tags']      = $this->General->get('tag', ['EMAIL_USER' => $this->session->userdata('email')]);
        $data['tasks']     = $this->Task->get(['EMAIL_USER' => $this->session->userdata('email'), 'orderBy' => 'TGL_TASK DESC']);

        $this->template->user('usr/VCalendar', $data);
    }
}