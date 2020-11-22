<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Template {

    protected $_ci;

    function __construct() {
        $this->_ci = &get_instance();
    }

    function displayutama($template=NULL, $data = NULL) {
        if($template!=NULL)
        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->_ci->load->view('template_backend/header', $data, TRUE);
        $data['_footer'] = $this->_ci->load->view('template_backend/footer', $data, TRUE);
        $data['_menu'] = $this->_ci->load->view('template_backend/menuutama', $data, TRUE);
        $data['_sidebar'] = $this->_ci->load->view('template_backend/templateutama', $data);
    }

    function display($template=NULL, $data = NULL) {
        if($template!=NULL)
        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->_ci->load->view('template_backend/header', $data, TRUE);
        $data['_footer'] = $this->_ci->load->view('template_backend/footer', $data, TRUE);
        $data['_menu'] = $this->_ci->load->view('template_backend/menu', $data, TRUE);
        $data['_sidebar'] = $this->_ci->load->view('template_backend/template', $data);
    }

    function displaysetting($template=NULL, $data = NULL) {
        if($template!=NULL)
        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->_ci->load->view('template_backend/header', $data, TRUE);
        $data['_footer'] = $this->_ci->load->view('template_backend/footer', $data, TRUE);
        $data['_menu'] = $this->_ci->load->view('template_backend/menusetting', $data, TRUE);
        $data['_sidebar'] = $this->_ci->load->view('template_backend/template', $data);
    }

    function displaypayroll($template=NULL, $data = NULL) {
        if($template!=NULL)
        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->_ci->load->view('template_backend/header', $data, TRUE);
        $data['_footer'] = $this->_ci->load->view('template_backend/footer', $data, TRUE);
        $data['_menu'] = $this->_ci->load->view('template_backend/menupayroll', $data, TRUE);
        $data['_sidebar'] = $this->_ci->load->view('template_backend/template', $data);
    }
    
    
    
    function front($template, $data = NULL) {
        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
//        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
//        $data['_header'] = $this->_ci->load->view('template_frontend/header', $data, TRUE);
//        $data['_footer'] = $this->_ci->load->view('template_frontend/footer', $data, TRUE);
//        $data['_menu'] = $this->_ci->load->view('template_frontend/menu', $data, TRUE);
        $data['_sidebar'] = $this->_ci->load->view('template_frontend/template', $data);
    }

}

?>
