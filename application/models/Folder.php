<?php

class Folder extends CI_Model{
    public function getAll(){
        return $this->db->get('folder')->result();
    }
    public function getById($id){
        return $this->db->get_where('folder', ['ID_FOLDER' => $id])->row();
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

        return $this->db->get_where('folder', $param)->result();
    }
    public function insert($param){
        $this->db->insert('folder', $param);
    }
    public function update($param){
        $this->db->where('ID_FOLDER', $param['ID_FOLDER'])->update('folder', $param);
    }
    public function delete($param){
        $this->db->delete('folder', $param);
    }
}