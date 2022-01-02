<?php

class TemplateAdmin {
    protected $_ci;

    function __construct(){
        $this->_ci = &get_instance();
    }
    public function admin($content, $data){
        $this->_ci->load->view('admin/templates/header', $data); // Header
        $this->_ci->load->view('admin/templates/sidebar', $data); // Sidebar
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('admin/templates/modal', $data); // Footer
        $this->_ci->load->view('admin/templates/footer', $data); // Footer
    }

}