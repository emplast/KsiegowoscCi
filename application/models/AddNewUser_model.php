<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddNewUser
 *
 * @author emplast
 */
class AddNewUser_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function createBase() {

        $query = $this->db->query('CREATE TABLE IF NOT EXISTS user('
                . 'id int NOT NULL AUTO_INCREMENT,'
                . 'imie varchar (100),'
                . 'nazwisko varchar (100),'
                . 'login varchar (100),'
                . 'haslo varchar (100),'
                . 'email varchar (100),'
                . 'telKomorkowy varchar(100),'
                . 'PRIMARY KEY (id))');

        $data = array('imie' => 'Piotr',
            'nazwisko' => 'Majewski',
            'login' => 'admin',
            'haslo' => md5('piotr123'),
            'email' => 'admin@emsoft.net.pl',
            'telKomorkowy' => '+48 788 308 893');
        $query_1 = $this->db->query('SELECT * FROM user');
        if ($query_1->num_rows() == 0) {
            $this->db->insert('user', $data);
        }
    }

    public function user() {
        $query = $this->db->query('SELECT * FROM user WHERE login="' . $this->input->post('part_1') . '"AND haslo="' . md5($this->input->post('part_2')) . '"');
        return $query->num_rows();
    }

    public function addUser() {
        $data = array('imie' => $this->input->post('part_3'),
            'nazwisko' => $this->input->post('part_4'),
            'login' => $this->input->post('part_1'),
            'haslo' => md5($this->input->post('part_2')),
            'email' => $this->input->post('part_5'),
            'telKomorkowy' => $this->input->post('part_6'));
        $query = $this->db->insert('user', $data);
    }

    public function addUserContent($login) {

        $query = $this->db->query('CREATE TABLE IF NOT EXISTS Dane_firmy_' . $login . '('
                . 'PART_1 VARCHAR(100),'
                . 'PART_2 VARCHAR (100),'
                . 'PART_3 VARCHAR (100),'
                . 'PART_3a VARCHAR (100),'
                . 'PART_4 VARCHAR (100),'
                . 'PART_5 VARCHAR (100),'
                . 'PART_6 VARCHAR (100),'
                . 'PART_7 VARCHAR (100),'
                . 'PART_8 VARCHAR (100),'
                . 'PART_9 VARCHAR (100),'
                . 'PART_10 VARCHAR (100),'
                . 'PART_11 VARCHAR (100),'
                . 'PART_12 VARCHAR (100),'
                . 'PART_13 VARCHAR (100),'
                . 'PART_14 VARCHAR (100),'
                . 'PART_15 VARCHAR (100),'
                . 'PART_16 VARCHAR (100),'
                . 'PART_17 VARCHAR (100),'
                . 'PART_18 VARCHAR (100),'
                . 'PART_19 VARCHAR (100),'
                . 'PART_20 VARCHAR (100),'
                . 'PART_21 VARCHAR (100),'
                . 'PART_22 VARCHAR (100),'
                . 'PART_23 VARCHAR (100),'
                . 'PART_24 VARCHAR (100),'
                . 'PART_25 VARCHAR (100),'
                . 'PART_26 VARCHAR (100),'
                . 'PART_27 VARCHAR (100),'
                . 'PART_28 VARCHAR (100),'
                . 'PART_29 VARCHAR (100),'
                . 'PART_30 VARCHAR (100),'
                . 'PART_31 VARCHAR (100),'
                . 'PART_32 VARCHAR (100),'
                . 'PART_33 VARCHAR (100),'
                . 'PART_34 VARCHAR (100),'
                . 'PART_35 VARCHAR (100),'
                . 'PART_35a VARCHAR(100),'
                . 'PART_35b VARCHAR(100),'
                . 'PART_36 VARCHAR (100),'
                . 'PART_37 VARCHAR (100),'
                . 'PART_38 VARCHAR (100),'
                . 'PART_39 VARCHAR (100),'
                . 'PART_40 VARCHAR (100),'
                . 'PART_41 VARCHAR (100),'
                . 'PART_42 VARCHAR (100),'
                . 'PART_43 VARCHAR (100),'
                . 'PART_44 VARCHAR (100),'
                . 'PART_45 VARCHAR (100),'
                . 'PART_46 VARCHAR (100),'
                . 'PART_47 VARCHAR (100),'
                . 'PART_48 VARCHAR (100),'
                . 'PART_49 VARCHAR (100),'
                . 'PART_50 VARCHAR (100),'
                . 'PART_51 VARCHAR (100),'
                . 'reg_date TIMESTAMP)');
        $data = array('PART_1' => $this->input->post('part_1'),
            'PART_2' => $this->input->post('part_2'),
            'PART_3' => $this->input->post('part_3'),
            'PART_3a' => $this->input->post('part_3a'),
            'PART_4' => $this->input->post('part_4'),
            'PART_5' => $this->input->post('part_5'),
            'PART_6' => $this->input->post('part_6'),
            'PART_7' => $this->input->post('part_7'),
            'PART_8' => $this->input->post('part_8'),
            'PART_9' => $this->input->post('part_9'),
            'PART_10' => $this->input->post('part_10'),
            'PART_11' => $this->input->post('part_11'),
            'PART_12' => $this->input->post('part_12'),
            'PART_13' => $this->input->post('part_13'),
            'PART_14' => $this->input->post('part_14'),
            'PART_15' => $this->input->post('part_15'),
            'PART_16' => $this->input->post('part_16'),
            'PART_17' => $this->input->post('part_17'),
            'PART_18' => $this->input->post('part_18'),
            'PART_19' => $this->input->post('part_19'),
            'PART_20' => $this->input->post('part_20'),
            'PART_21' => $this->input->post('part_21'),
            'PART_22' => $this->input->post('part_22'),
            'PART_23' => $this->input->post('part_23'),
            'PART_24' => $this->input->post('part_24'),
            'PART_25' => $this->input->post('part_25'),
            'PART_26' => $this->input->post('part_26'),
            'PART_27' => $this->input->post('part_27'),
            'PART_28' => $this->input->post('part_28'),
            'PART_29' => $this->input->post('part_29'),
            'PART_30' => $this->input->post('part_30'),
            'PART_31' => $this->input->post('part_31'),
            'PART_32' => $this->input->post('part_32'),
            'PART_33' => $this->input->post('part_33'),
            'PART_34' => $this->input->post('part_34'),
            'PART_35' => $this->input->post('part_35'),
            'PART_35a' => $this->input->post('part_35a') . '/' . $this->input->post('part_35b'),
            'PART_35b' => $this->input->post('part_35c'),
            'PART_36' => $this->input->post('part_36'),
            'PART_37' => $this->input->post('part_37'),
            'PART_38' => $this->input->post('part_38'),
            'PART_39' => $this->input->post('part_39'),
            'PART_40' => $this->input->post('part_40'),
            'PART_41' => $this->input->post('part_41'),
            'PART_42' => $this->input->post('part_42'),
            'PART_43' => $this->input->post('part_43'),
            'PART_44' => $this->input->post('part_44'),
            'PART_45' => $this->input->post('part_45'),
            'PART_46' => $this->input->post('part_46'),
            'PART_47' => $this->input->post('part_47'),
            'PART_48' => $this->input->post('part_48'),
            'PART_49' => $this->input->post('part_49'),
            'PART_50' => $this->input->post('part_50'),
            'PART_51' => $this->input->post('part_51'));
        $this->db->insert('Dane_firmy_' . $login . '', $data);
    }

}
