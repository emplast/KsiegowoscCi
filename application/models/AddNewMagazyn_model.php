<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddNewMagazyn_model
 *
 * @author emplast
 */
class AddNewMagazyn_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function createMagazyn() {

        $query = $this->db->query('CREATE TABLE IF NOT EXISTS Magazyny_firmy_' . $this->session->userdata('name') . '('
                . 'PART_1 VARCHAR(100),'
                . 'PART_2 VARCHAR(100),'
                . 'PART_3 VARCHAR(100),'
                . 'PART_4 VARCHAR(100))');
        $data = array('PART_1' => '1',
            'PART_2' => 'A',
            'PART_3' => 'Magazyn podstawowy',
            'PART_4' => '2');
        $query_1 = $this->db->query('SELECT * FROM Magazyny_firmy_' . $this->session->userdata('name') . '');
        if ($query_1->num_rows() == 0) {
            $this->db->insert('Magazyny_firmy_' . $this->session->userdata('name') . '', $data);
        }
    }

    public function add() {
        $this->createMagazyn();
        $data = array('PART_1' => $this->input->post('part_1b'),
            'PART_2' => $this->input->post('part_2b'),
            'PART_3' => $this->input->post('part_3b'),
            'PART_4' => $this->input->post('part_4b'));
        $query = $this->db->insert('Magazyny_firmy_' . $this->session->userdata('name') . '', $data);
    }

    public function content() {
        $query = $this->db->query('SELECT * FROM Magazyny_firmy_' . $this->session->userdata('name') . '');

        $row = $query->row();
        for ($i = 0; $i < $query->num_rows(); $i++) {
            $value['dane' . $i] = $query->row_array($i);
        }

        return $value;
    }

    public function sprawdzenie() {
        $query = $this->db->query('SELECT * FROM Magazyny_firmy_' . $this->session->userdata('name') . '');
       
        if ($query->num_rows() != 0 & $query->num_rows() != NULL) {
            foreach ($query->result_array() as $row) {


                if (strcmp($this->input->post('part_35a'), $row['PART_1']) == 0 & strcmp($this->input->post('part_35b'), $row['PART_2']) == 0 & strcmp($this->input->post('part_35c'), $row['PART_3']) == 0) {
                    return TRUE;
                }
            }
        } else {
            return FALSE;
        }
    }

    public function delate() {
        $this->db->delete('Magazyny_firmy_' . $this->session->userdata('name') . '', array('PART_1' => $this->input->cookie('part_102'), 'PART_2' => $this->input->cookie('part_103')));
    }

    public function work() {
        $result = $this->db->query('SELECT * FROM Dane_firmy_' . $this->session->userdata('name'));
        $str = explode('/', $result->row()->PART_35a);
        $query = array('part_104' => $str[0], 'part_105' => $str[1]);
        return $query;
    }

    public function update() {
        $data = array('PART_35a' => $this->input->cookie('part_105') . '/' . $this->input->cookie('part_106'), 'PART_35b' => $this->input->cookie('part_107'));
        $this->db->update('Dane_firmy_' . $this->session->userdata('name'), $data);
    }

}
