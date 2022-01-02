<?php

class StatisticController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('is_logged'))){
            redirect('sign-in');
        }
        $this->load->model('Statistic');
    }
    public function index(){
        $email = $this->session->userdata('email');
        $data['title']          = 'Statistic';
        $data['folders']        = $this->General->get('folder', ['EMAIL_USER' => $this->session->userdata('email')]);
        $data['tags']           = $this->General->get('tag', ['EMAIL_USER' => $this->session->userdata('email')]);
        $data['countTask']      = $this->Statistic->getCountTask($email)->JML;
        $data['countCompleted'] = $this->Statistic->getCountCompleted($email)->JML;
        $data['countFolder']    = $this->Statistic->getCountFOlder($email)->JML;
        $data['completionRate'] = ($data['countTask'] / $data['countCompleted']) * 100;

        $this->template->user('usr/VStatistic', $data);
    }
}