<?php

class CalendarController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_logged') == false){
            redirect('sign-in');
        }       
    }
    public function index(){
        $this->load->view('VCalendar');
    }
}