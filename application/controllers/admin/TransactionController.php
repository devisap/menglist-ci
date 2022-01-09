<?php

class TransactionController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
        $this->load->model('Transaction');
    }
    public function index(){
        $dataUser = $this->User->getAll();

        $data['title']          = "Daftar Transaction";
        $data['user']           = $dataUser;
        $data['transactions']    = $this->Transaction->getAll();

		$this->template->admin('admin/VTransaksi', $data);
    }
    
}