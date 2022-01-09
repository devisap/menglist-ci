<?php

class Emailing {
    public function send($param){
        $CI =& get_instance();
        $config = [
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'protocol'      => 'smtp',
            'smtp_host'     => 'smtp.gmail.com',
            'smtp_user'     => 'menglist.company@gmail.com', 
            'smtp_pass'     => 'menglist123', 
            'smtp_crypto'   => 'ssl',
            'smtp_port'     => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];
        $CI->load->library('email', $config);
        
        $CI->email->from('menglist.company@gmail.com', 'Menglist Company');
        $CI->email->to($param['to']); // Ganti dengan email tujuan
        // $CI->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        $CI->email->subject($param['subject']);
        $CI->email->message($param['message']);
        if ($CI->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}