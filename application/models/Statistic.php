<?php

class Statistic extends CI_Model{
    public function getCountTask($email){
        return $this->db->query("SELECT COUNT(*) AS JML FROM task t WHERE EMAIL_USER = '$email'")->row();
    }
    public function getCountCompleted($email){
        return $this->db->query("SELECT COUNT(*) AS JML FROM task t WHERE EMAIL_USER = '$email' AND ISFINISHED_TASK = '1'")->row();
    }
    public function getCountFolder($email){
        return $this->db->query("SELECT COUNT(*) AS JML FROM folder f WHERE EMAIL_USER = '$email'")->row();
    }
}