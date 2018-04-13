<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Magazyny
 *
 * @author emplast
 */
class Magazyny extends CI_Controller {

    public function index() {
        
        $this->load->model('AddNewMagazyn_model');


        $login = $this->session->userdata('name');
        $this->load->view('pageUser');
        if (!empty($this->session->userdata('zalogowany'))) {
            $this->load->view('menu', array('login' => $this->session->userdata('name')));
        } else {
            $this->load->view('menu', array('login' => null));
        }
        $this->load->view('menuApplication');

        $magazyn = new AddNewMagazyn_model;

        $data = array('dane' => $magazyn->content());
        $data['part_104'] = $magazyn->work()['part_104'];
        $data['part_105'] = $magazyn->work()['part_105'];
        $this->load->view('magazyny', $data);
        $this->load->view('footerApplication');
    }

    public function add() {
        $this->load->model('addNewMagazyn_model');
        $mag = new AddNewMagazyn_model();
        $mag->add();

        $this->load->helper('form');
        $login = $this->session->userdata('name');
        $this->load->view('pageUser');
        if (!empty($this->session->userdata('zalogowany'))) {
            $this->load->view('menu', array('login' => $this->session->userdata('name')));
        } else {
            $this->load->view('menu', array('login' => null));
        }
        $this->load->view('menuApplication');

        $data = array('dane' => $mag->content());


        $this->load->view('magazyny', $data);
        $this->load->view('footerApplication');
    }
    public function work() {

        $this->load->model('addNewMagazyn_model');
        $magazyn = new AddNewMagazyn_model();

        if ($this->input->cookie('part_100') == 1) {
            $magazyn->delate();
            $this->input->set_cookie('part_100', 0);
            $this->input->set_cookie('part_102', 0);
            $this->input->set_cookie('part_103', 0);
            redirect('index.php/Application/index');
        }
        if ($this->input->cookie('part_101') == 1) {
            $magazyn->update();
            $this->input->set_cookie('part_104', 0);
            $this->input->set_cookie('part_105', 0);
            $this->input->set_cookie('part_106', 0);
            redirect('index.php/Application/index');
        }
    }

}
