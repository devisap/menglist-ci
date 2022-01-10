<?php

class PremiumController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Transaction');
        $this->load->library('upload');
    }
    public function index(){
        
		$this->load->view('VPremium');
    }

    public function store(){
      $upload = $this->upload_image();
      print_r($_POST);
      if($upload['status'] == true){
        $dataStore['EMAIL_USER']        = $this->session->userdata('email');
        $dataStore['BUKTI_TRANSACTION'] = $upload['link'];
        $this->Transaction->insert($dataStore);
        redirect('task');
      }else{
        print_r($upload['msg']);
      }
    }

    public function upload_image(){
      $conf['upload_path']    = "./uploads/transaction/";
      $conf['allowed_types']  = "jpg|png|jpeg|bmp";
      $conf['max_size']       = 2048;
      $conf['file_name']      = time();
      $conf['encrypt_name']   = TRUE;

      $this->upload->initialize($conf);
      if($this->upload->do_upload('bukti')){
          $img = $this->upload->data();
          return [
                  'status'=> true,
                  'msg'   => 'Data berhasil terupload',
                  'link'  => base_url('uploads/transaction/'.$img['file_name'])
              ];
      }else{
          return [
              'status'=> false,
              'msg'   => $this->upload->display_errors(),
          ];
      }
  }
    
}