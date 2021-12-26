<?php

class Tag extends CI_Model{
    public function getAll(){
        return $this->db->get('tag')->result();
    }
    public function getById($id){
        return $this->db->get_where('tag', ['ID_TAG' => $id])->row();
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

        return $this->db->get_where('tag', $param)->result();
    }
    public function insert($param){
        $this->db->insert('tag', $param);
    }
    public function update($param){
        $this->db->where('ID_TAG', $param['ID_TAG'])->update('tag', $param);
    }
    public function delete($param){
        $this->db->delete('tag', $param);
    }
}