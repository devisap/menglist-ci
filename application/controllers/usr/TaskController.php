<?php

class TaskController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('is_logged'))){
            redirect('sign-in');
        }
        $this->load->model('Task');
    }
    public function index(){
        $data['title']      = "Task";
        $data['folders']    = $this->General->get('folder', ['EMAIL_USER' => $this->session->userdata('email')]);
        $data['tags']       = $this->General->get('tag', ['EMAIL_USER' => $this->session->userdata('email')]);

        $email          = $this->session->userdata('email');
        $currDate       = date('Y-m-d');
        $tomDate        = date('Y-m-d', strtotime("+1 day", strtotime($currDate)));
        $startWeekDate  = date('Y-m-d', strtotime("+2 day", strtotime($currDate)));
        $endWeekDate    = date('Y-m-d', strtotime("+8 day", strtotime($currDate)));
        $data['todays']     = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "0", "DATE(TGL_TASK)" => $currDate]);
        $data['tomorrows']  = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "0", "DATE(TGL_TASK)" => $tomDate]);
        $data['nxtWeeks']   = $this->Task->getNextWeek(['EMAIL_USER' => $email, "start" => $startWeekDate, "end" => $endWeekDate]);
        $data['undates']    = $this->Task->getUndate(['EMAIL_USER' => $email]);
        $data['completeds'] = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "1", "orderBy" => "TGL_TASK DESC"]);

        $this->template->user('usr/VTask', $data);
    }
    public function store(){
        $tags = json_decode($_POST['TAGS_TASK']);
        unset($_POST['TAGS_TASK']);

        $reminders = json_decode($_POST['PENGINGAT_TASK']);
        unset($_POST['PENGINGAT_TASK']);

        $dataStore = $_POST;
        $dataStore['TGL_TASK'] = $_POST['TGL_TASK'] != null ? date_format(date_create($dataStore['TGL_TASK']), 'Y-m-d H:i:s') : null;
        $idTask = $this->Task->insert($dataStore);

        if($tags != null){
            foreach($tags as $item){
                $this->Task->insertTag(['ID_TASK' => $idTask, 'ID_TAG' => $item->id]);
            }
        }
        if($reminders != null){
            foreach($reminders as $item){
                $date = date('Y-m-d H:i:s', strtotime($item->reminder, strtotime($dataStore['TGL_TASK'])));
                $email = $this->session->userdata('email');
                $this->Task->insertReminder(['ID_TASK' => $idTask, 'EMAIL_USER' => $email, 'REMINDER' => $date]);
            }
        }
        redirect('task');
    }
}