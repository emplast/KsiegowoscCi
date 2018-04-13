<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewUser
 *
 * @author emplast
 */
class NewUser extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->view('newUser');
        if (empty($this->session->userdata('name'))) {
            $this->load->view('menu', array('login' => null));
        } else {
            $this->load->view('menu', array('login' => $this->session->userdata('name')));
        }
        $data = array('alert' => null);
        $this->load->view('newUserLog', $data);
        $this->load->view('footer');
    }

    public function add() {
        $this->load->library('form_validation');
        $this->load->helper('cookie');

        $this->form_validation->set_rules('part_1', 'Login', 'required|min_length[5]|max_length[100]|callback_user_name');
        $this->form_validation->set_rules('part_2', 'Hasło', 'required', 'required');
        $this->form_validation->set_rules('part_3', 'Imie', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_4', 'Nazwisko', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_5', 'Email', 'required|min_length[3]|max_length[100]');
        $this->form_validation->set_rules('part_6', 'TelKomorkowy', 'required|max_length[100]');
        $this->form_validation->set_rules('defaultReal', 'Captcha', 'required|callback_hash');


        $this->form_validation->set_message('required', 'Pole {field} nie może być puste !!!');
        $this->form_validation->set_message('min_length', 'Pole %s musi zawierać minimum 5 zanaków !!!');
        $this->form_validation->set_message('max_length', 'Pole %s może zawierać maximum 100 zanaków !!!');
        $this->form_validation->set_message('user_name', 'Pole %s musi być jednym wyrazem !!! ');
        $this->form_validation->set_message('hash', 'Podałeś złe dane !!!');


        if ($this->form_validation->run() == FALSE) {

            $login = null;
            $this->load->helper('form');
            $this->load->view('newUser');
            if (empty($this->session->userdata('name'))) {
                $this->load->view('menu', array('login' => null));
            } else {
                $this->load->view('menu', array('login' => $this->session->userdata('name')));
            }
            $data = array('alert' => null);
            $this->load->view('newUserLog', $data);
            $this->load->view('footer');
        } else {

            $this->sprawdzenie();
        }
    }

    public function sprawdzenie() {
        $this->load->model('addNewUser_model');
        $login = new AddNewUser_model();
        $login->createBase();
        if ($login->user() > 0) {
            $this->load->helper('form');
            $this->load->view('newUser');
            $this->load->view('menu');
            $data = array('alert' => 'Użytkownik o podanym loginie istnieje');
            $this->load->view('newUserLog', $data);
            $this->load->view('footer');
        } else {

            $this->input->set_cookie('name', $this->input->post('part_1'), 36);
            $this->session->set_userdata('name', $this->input->post('part_1'));
            $this->session->set_userdata('zalogowany', '+)(+');
            $login->addUser();
            redirect('index.php/PageNewUser/index');
        }
    }

    function user_name() {
        $parts = explode(' ', $this->input->post('part_1'));
        if (empty($parts[1])) {
            return TRUE;
        } else {

            return FALSE;
        }
    }

    function rpHash($value) {
        $hash = 5381;
        $value = strtoupper($value);
        for ($i = 0; $i < strlen($value); $i++) {
            $hash = ($this->leftShift32($hash, 5) + $hash) + ord(substr($value, $i));
        }
        return $hash;
    }

    function leftShift32($number, $steps) {
        $binary = decbin($number);
        $binary = str_pad($binary, 32, "0", STR_PAD_LEFT);
        $binary = $binary . str_repeat("0", $steps);
        $binary = substr($binary, strlen($binary) - 32);
        return ($binary{0} == "0" ? bindec($binary) :
                -(pow(2, 31) - bindec(substr($binary, 1))));
    }

    function hash() {
        if ($this->rpHash($this->input->post('defaultReal')) == $this->input->post('realHash')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
