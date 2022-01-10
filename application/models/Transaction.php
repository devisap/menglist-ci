<?php

class Transaction extends CI_Model{
    public function getAll(){
        return $this->db->get('transaction')->result();
    }
    public function getById($id){
        return $this->db->get_where('transaction', ['ID_TRANSACTION' => $id])->row();
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

        return $this->db->get_where('transaction', $param)->result();
    }
    public function insert($param){
        $this->db->insert('transaction', $param);
    }
    public function update($param){
        $this->db->where('ID_TRANSACTION', $param['ID_TRANSACTION'])->update('transaction', $param);
    }
    public function delete($param){
        $this->db->delete('transaction', $param);
    }
    public function upgradePremium($Id_Transaction)
    {
        $this->db->set('STATUS_TRANSACTION', 1);
        $this->db->where('ID_TRANSACTION', $Id_Transaction);
        return $this->db->update('transaction');   
    }
}