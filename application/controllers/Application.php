<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Application
 
 * @author emplast
 */
class Application extends CI_Controller {

    public function index() {
 if(!empty($this->session->userdata('zalogowany'))){
        $this->load->helper('form');
        $this->load->view('application');
        if (!empty($this->session->userdata('zalogowany'))) {
            $this->load->view('menu', array('login' => $this->session->userdata('name')));
        } else {
            $this->load->view('menu', array('login'=>null));
        }
        $this->load->view('menuApplication');
        $this->load->view('applicationUser');
        $this->load->view('footerApplication');
    
    }else{
        redirect('index.php/Welcome/index');
    }

}
}