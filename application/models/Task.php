<?php

class Task extends CI_Model{
    public function getAll(){
        return $this->db->get('task')->result();
    }
    public function getById($id){
        return $this->db->get_where('task', ['ID_TASK' => $id])->row();
    }
    public function get($param){
        if(!empty($param['orderBy'])){ // order by
            $this->db->order_by($param['orderBy']);
            unset($param['orderBy']);
        }
        if(!empty($param['limit'])){ // limit
            $this->db->limit($param['limit']);
            unset($param['limit']);
        }

        return $this->db->get_where('task', $param)->result();
    }
    public function getNextWeek($param){
        return $this->db->query("
            SELECT * FROM task t WHERE EMAIL_USER = '".$param['EMAIL_USER']."' AND ISFINISHED_TASK = '0' AND TGL_TASK BETWEEN '".$param['start']."' AND '".$param['end']."'
        ")->result();
    }
    public function getUndate($param){
        return $this->db->query("
            SELECT * FROM task t WHERE EMAIL_USER = '".$param['EMAIL_USER']."' AND TGL_TASK IS NULL
        ")->result();
    }
    public function insert($param){
        $this->db->insert('task', $param);
        return $this->db->insert_id();
    }
    public function insertTag($param){
        $this->db->insert('task_tag', $param);
    }
    public function insertReminder($param){
        $this->db->insert('task_reminder', $param);
    }
    public function update($param){
        $this->db->where('ID_TASK', $param['ID_TASK'])->update('task', $param);
    }
    public function delete($param){
        $this->db->delete('task', $param);
    }
}