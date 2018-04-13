<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
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
class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        $query = $this->db->query('SELECT * FROM user WHERE login="' . $this->input->post('part_1') . '"AND haslo="' . md5($this->input->post('part_2')) . '"');
        if($query->num_rows()>0){
            $row=$query->row();
            return array('login'=>$row->login,'haslo'=>$row->haslo);
        }else{
            return array('login'=>NULL,'haslo'=>NULL);
        }
        
    }

    public function email() {
        $query = $this->db->query('SELECT * FROM user WHERE email="' . $this->input->post('part_1') . '"');
        if ($query->num_rows() > 0) {
            return array('wynik' => TRUE, 'wartosc' => $query->row());
        } else {
           return array('wynik'=>FALSE); 
        }
    }

    public function emailUser($email) {
        $query = $this->db->query('SELECT * FROM user WHERE email="' .$email . '"');
        if ($query->num_rows() > 0) {
            $row=$query->row();
            return array('wynik' => TRUE, 'wartosc' => $row->email,'name'=>$row->imie);
        } else {
           return array('wynik'=>FALSE,'wartosc' => NULL,'name'=>NULL); 
        }
    }
    public function newPassword($email){
        $this->db->where('email',$email);
        $this->db->update('user',array('haslo'=> md5($this->input->post('part_1'))));
    }

}
