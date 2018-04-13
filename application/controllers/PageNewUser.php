<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageNewUser
 *
 * @author emplast
 */
class PageNewUser extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->helper('xml');
         $dom = new DOMDocument;
            $dom->preserveWhiteSpace = False;
            $dom->load('xml/UrzedySkarbowe.xml');
            $nazwy = $dom->getElementsByTagName('annotation');
            $i = 0;
            foreach ($nazwy as $nazwa) {
                $urzedy = $nazwa->getElementsByTagName('documentation');
                $urzad = $urzedy->item(0)->nodeValue;
                $tmp[] = $urzad;

            $i++;
            }

        $this->load->view('pageNewUser',array('urzedy'=>$tmp));
    }

    public function add() {
        $this->sprawdzenie();
        
    }

    public function sprawdzenie() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('part_1', 'Nazwa skrócona firmy', 'trim|required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_2', 'Nazwa pełna firmy', 'trim|required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_3', 'NIP', 'required|min_length[5]|max_length[100]');

        $this->form_validation->set_rules('part_18', 'Kraj', 'required|min_length[5]|max_length[100]');

        $this->form_validation->set_rules('part_20', 'Powiat', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_21', 'Gmina', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_22', 'Ulica', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('part_23', 'Nr domu', 'required|min_length[1]|max_length[100]');
        $this->form_validation->set_rules('part_25', 'Miejscowość', 'required|min_length[5]|max_length[100]');


        $this->form_validation->set_message('required', 'Pole {field} nie może być puste !!!');
        $this->form_validation->set_message('min_length', 'Pole %s musi zawierać minimum 5 zanaków !!!');
        $this->form_validation->set_message('max_length', 'Pole %s może zawierać maximum 100 zanaków !!!');
        
        if ($this->form_validation->run() == FALSE) {


            $this->load->helper('form');
            $this->load->helper('xml');
            $dom = new DOMDocument;
            $dom->preserveWhiteSpace = False;
            $dom->load('xml/UrzedySkarbowe.xml');
            $nazwy = $dom->getElementsByTagName('annotation');
            $i = 0;
            foreach ($nazwy as $nazwa) {
                $urzedy = $nazwa->getElementsByTagName('documentation');
                $urzad = $urzedy->item(0)->nodeValue;
                $tmp[] =$urzad;
                
                
            }

        $this->load->view('pageNewUser',array('urzedy'=>$tmp));
        } else {
            $this->session->set_userdata('zalogowany', '+)(+');
            
            $this->load->model('addNewUser_model');
            $this->load->model('AddNewMagazyn_model');
            $userAdd = new AddNewUser_model();
            $userAdd->addUserContent($this->session->userdata('name'));
            $magazyn = new AddNewMagazyn_model();
            $magazyn->createMagazyn();

            redirect('index.php/Application/index');
        }
    }

   

}
