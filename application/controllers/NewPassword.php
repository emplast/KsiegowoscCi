<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewPassword
 *
 * @author emplast
 */
class NewPassword extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->view('newPassword');
        if (empty($this->session->userdata('name'))) {
            $this->load->view('menu', array('login' => null));
        } else {
            $this->load->view('menu', array('login' => $this->session->userdata('name')));
        }
        $this->load->view('newPasswordUser');
        $this->load->view('footer');
    }

    public function password() {
        $this->load->helper('form');
        $this->load->library('email');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('part_1', 'Email', 'required|valid_email');

        $this->form_validation->set_message('valid_email', 'Podałeś nieprawidłowy adres e-mail !!! ');
        $this->form_validation->set_message('required', 'Pole nie może być puste !!! ');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('newPassword');
            if (empty($this->session->userdata('name'))) {
                $this->load->view('menu', array('login' => null));
            } else {
                $this->load->view('menu', array('login' => $this->session->userdata('name')));
            }
            $this->load->view('newPasswordUser');
            $this->load->view('footer');
        } else {
            $this->load->model('login_model');
            $user = new Login_model();

            if ($user->email()['wynik'] == TRUE) {

                $email = $user->email()['wartosc']->email;

                $qstring = base64_encode($email);
                $url = site_url() . 'index.php/ResetPassword/index/' . $qstring;
                $link = '<a href="' . $url . '">' . $url . '</a>';
                $this->email->to($email);
                $this->email->from('administrator@emsoft.net.pl','Zespoł Emsoft.net.pl');
                $this->email->subject('Witaj  ' . $user->emailUser($email)['name'] . '  czeka cię zmiana hasła w serwisie EmSoft Księgowość');
                $this->email->message('Aby zresetować hasło kliknij na poniższy link.     '.''
                        .'                                                                         '
                        . ''.$url.''
                        . ' Ta wiadomość została wygenerowana automatycznie nie odpowiadaj na nią.'
                        . '                                                                        '
                        . '______________________________________________________________________  '
                        . 'Zespoł EmSoft.net.pl');
                $this->email->send();
                redirect('index.php/Application/index');
            } else {
                redirect('index.php/NewUser/index');
            }
        }
    }

}
