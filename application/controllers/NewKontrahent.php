<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewKontrahent
 *
 * @author emplast
 */
class NewKontrahent extends CI_Controller {
    
    public function index(){
        $this->load->helper('form');
        $this->load->model('kontrahenci_model');
        $login = $this->session->userdata('name');

        $data = new Kontrahenci_model();
        $data->newBase($login);
        $data->addKontrahent();
        
        
        $this->load->view('pageUser');
        if (!empty($this->session->userdata('zalogowany'))) {
            $this->load->view('menu', array('login' => $this->session->userdata('name')));
        } else {
            $this->load->view('menu', array('login' => null));
        }
        
         $this->load->view('menuApplication');
        
         $dane['kontrahenci'] = $data->userKontrahent();
         $dane['kontrahent']=1;
        
        
        
        $this->load->view('wprowadzanieDokMag',$dane);
        $this->load->view('footerApplication');
        
        
    }
    
    
}
