<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogOut
 *
 * @author emplast
 */
class LogOut extends CI_Controller {
    
    public function index(){
        if(!empty($this->session->userdata('zalogowany'))){
        $this->session->set_userdata('zalogowany',null);
        $this->session->set_userdata('name',null);
        
        $this->load->view('logOut');
         if(empty($this->session->userdata('name'))){
		$this->load->view('menu',array('login'=>null));
            } else {
                $this->load->view('menu',array('login'=>$this->session->userdata('name')));
            }
        $this->load->view('logOutUser');
        $this->load->view('footer');
        }else{
            redirect('index.php/Welcome/index');
        }
    }
   
    
}
