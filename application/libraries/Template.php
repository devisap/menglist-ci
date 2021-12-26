<?php

class Template {
    protected $_ci;

    function __construct(){
        $this->_ci = &get_instance();
    }
    public function user($content, $data){
        $this->_ci->load->view('usr/templates/header', $data); // Header
        $this->_ci->load->view('usr/templates/sidebar', $data); // Sidebar
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('usr/templates/modal', $data); // Footer
        $this->_ci->load->view('usr/templates/footer', $data); // Footer
    }

}