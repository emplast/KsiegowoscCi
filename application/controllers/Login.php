<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author emplast
 */
class Login extends CI_Controller{
    
    public function index(){
        if(empty($this->session->userdata('zalogowany'))){
        $this->load->helper('form');
        $this->load->view('login');
        if(empty($this->session->userdata('name'))){
		$this->load->view('menu',array('login'=>null));
            } else {
                $this->load->view('menu',array('login'=>$this->session->userdata('name')));
            }
        $this->load->view('logowanie');
        $this->load->view('footer');
        
        } else {
            redirect('index.php/Application/index');
        }
    }
    public function loginUser(){
        $this->load->model('addNewUser_model');
        $user=new AddNewUser_model();
        $user->createBase();
        
        
        $this->load->model('login_model');
        $login= new Login_model();
        $str1=$login->login()['login'];
        $str2=$this->input->post('part_1');
        
        $str3=$login->login()['haslo'];
        $str4= md5($this->input->post('part_2'));
        
        
        if(strcmp($str1, $str2)==0 & strcmp($str3, $str4)==0){
            $this->session->set_userdata('zalogowany','+)(+');
            $this->session->set_userdata('name',$this->input->post('part_1'));
            
            redirect('index.php/Welcome/index');
        }else{
            redirect('index.php/NewUser/index'); 
        }
    }
}
