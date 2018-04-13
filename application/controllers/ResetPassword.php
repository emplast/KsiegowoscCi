<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResetPassword
 *
 * @author emplast
 */
class ResetPassword extends CI_Controller {

    public function index() {
        $this->load->model('login_model');
        $this->load->helper('cookie');
        
        $token = base64_decode($this->uri->segment(3));
        $this->session->set_userdata('email',$token);
        $email = new Login_model();


        if ($email->emailUser($token)['wynik'] == FALSE) {
            redirect('index.php/NewUser/index');
        } else {
            $this->load->helper('form');
            $this->load->view('resetPassword');
            if (empty($this->session->userdata('name'))) {
                $this->load->view('menu', array('login' => null));
            } else {
                $this->load->view('menu', array('login' => $this->session->userdata('name')));
            }
            $this->load->view('resetPasswordUser', array('imie' => $email->emailUser($token)['name']));
            $this->load->view('footer');
        }
    }

    public function reset() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('login_model');
        $this->load->helper('cookie');
        
        
                
        $email = new Login_model();
        
        $this->form_validation->set_rules('part_1', 'Hasło', 'required|min_length[5]');
        $this->form_validation->set_rules('part_2', 'Powtórka hasła', 'required|matches[part_1]');

        $this->form_validation->set_message('required', 'Polenie może być puste !!!');
        $this->form_validation->set_message('min_length', 'Pole musi zawierać przynajmniej 5 znaków !!!');
        $this->form_validation->set_message('matches', 'Podane hasła nie są takie same !!!');
       
        if ($this->form_validation->run() == FALSE) {
            $this->load->helper('form');
            $this->load->view('resetPassword');
            if (empty($this->session->userdata('name'))) {
                $this->load->view('menu', array('login' => null));
            } else {
                $this->load->view('menu', array('login' => $this->session->userdata('name')));
            }
            $this->load->view('resetPasswordUser', array('imie' => $email->emailUser($this->session->userdata('email'))['name']));
            $this->load->view('footer');
        } else {
            
            $email->newPassword($this->session->userdata('email'));
            redirect('index.php/Login/index');
        }
    }

}
