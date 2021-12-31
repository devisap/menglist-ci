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
        $data['todays']     = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "0", "DATE(TGL_TASK) <" => $tomDate, 'orderBy' => "TGL_TASK ASC"]);
        $data['tomorrows']  = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "0", "DATE(TGL_TASK)" => $tomDate, 'orderBy' => "TGL_TASK ASC"]);
        $data['nxtWeeks']   = $this->Task->get(['EMAIL_USER' => $email, 'ISFINISHED_TASK' => "0", "DATE(TGL_TASK) >" => $tomDate, 'orderBy' => "TGL_TASK ASC"]);
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
                $this->Task->insertReminder(['ID_TASK' => $idTask, 'EMAIL_USER' => $email, 'NAMA_REMINDER' => $item->value, 'REMINDER' => $date]);
            }
        }
        $this->session->set_flashdata('succ_msg', 'Successfully created a new task');
        redirect('task');
    }
    public function edit(){
        $tags = json_decode($_POST['TAGS_TASK']);
        unset($_POST['TAGS_TASK']);

        $reminders = json_decode($_POST['PENGINGAT_TASK']);
        unset($_POST['PENGINGAT_TASK']);

        $dataStore = $_POST;
        $dataStore['TGL_TASK'] = $_POST['TGL_TASK'] != null ? date_format(date_create($dataStore['TGL_TASK']), 'Y-m-d H:i:s') : null;
        $this->Task->update($dataStore);

        if($tags != null){
            $this->Task->deleteTag(['ID_TASK' => $dataStore['ID_TASK']]);
            foreach($tags as $item){
                $this->Task->insertTag(['ID_TASK' => $dataStore['ID_TASK'], 'ID_TAG' => $item->id]);
            }
        }
        if($reminders != null){
            $this->Task->deleteReminder(['ID_TASK' => $dataStore['ID_TASK']]);
            foreach($reminders as $item){
                $date = date('Y-m-d H:i:s', strtotime($item->reminder, strtotime($dataStore['TGL_TASK'])));
                $email = $this->session->userdata('email');
                $this->Task->insertReminder(['ID_TASK' => $dataStore['ID_TASK'], 'EMAIL_USER' => $email, 'NAMA_REMINDER' => $item->value, 'REMINDER' => $date]);
            }
        }
        $this->session->set_flashdata('succ_msg', 'Successfully update a task');
        redirect('task');
    }
    public function ajxGet(){
        $task           = $this->Task->getById($_POST['id']);
        $taskTag        = $this->General->get('v_task_tag', ['ID_TASK' => $_POST['id']]);
        $reminderTag    = $this->General->get('task_reminder', ['ID_TASK' => $_POST['id']]);
        echo json_encode(['TASK' => $task, 'TASKTAG' => $taskTag, 'TASKREMINDER' => $reminderTag]);
    }
}