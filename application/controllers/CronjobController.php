<?php

class CronJobController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('emailing');
    }
    public function reminderTask(){
        $currDate = date('Y-m-d H:i:s');
        $reminders = $this->General->get('task_reminder', ["REMINDER" => $currDate]);
        print_r($currDate);
        if($reminders != null){
            $emailData = array();
            foreach ($reminders as $item) {
                array_push($emailData, $item->EMAIL_USER);
            }
            
            $email['to']        = $emailData;
            $email['subject']   = 'Testing';
            $email['message']   = 'Isi Testing';
            
            $this->emailing->send($email);

            foreach ($reminders as $item) {
                $this->db->where(['EMAIL_USER' => $item->EMAIL_USER, 'REMINDER' => $item->REMINDER])->update('task_reminder', ['STATUS' => "1"]);
            }
        }
    }
}