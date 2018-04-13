<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaneFirmy_model
 *
 * @author emplast
 */
class DaneFirmy_model extends CI_Model {
   
    public function __construct() {
        parent::__construct();
    }
    public function dane(){
        $dane=$this->db->query('SELECT * FROM Dane_firmy_'.$this->session->userdata('name').' ');
        $row = $dane->row();
        $split = explode('/', $row->PART_35a);
        return array('part_1'=>$row->PART_1,
            'part_2'=>$row->PART_2,
            'part_3'=>$row->PART_3,
            'part_3a'=>$row->PART_3a,
            'part_4'=>$row->PART_4,
            'part_5'=>$row->PART_5,
            'part_6'=>$row->PART_6,
            'part_7'=>$row->PART_7,
            'part_8'=>$row->PART_8,
            'part_9'=>$row->PART_9,
            'part_10'=>$row->PART_10,
            'part_11'=>$row->PART_11,
            'part_12'=>$row->PART_12,
            'part_13'=>$row->PART_13,
            'part_14'=>$row->PART_14,
            'part_15'=>$row->PART_15,
            'part_16'=>$row->PART_16,
            'part_17'=>$row->PART_17,
            'part_18'=>$row->PART_18,
            'part_19'=>$row->PART_19,
            'part_20'=>$row->PART_20,
            'part_21'=>$row->PART_21,
            'part_22'=>$row->PART_22,
            'part_23'=>$row->PART_23,
            'part_24'=>$row->PART_24,
            'part_25'=>$row->PART_25,
            'part_26'=>$row->PART_26,
            'part_27'=>$row->PART_27,
            'part_28'=>$row->PART_28,
            'part_29'=>$row->PART_29,
            'part_30'=>$row->PART_30,
            'part_31'=>$row->PART_31,
            'part_32'=>$row->PART_32,
            'part_33'=>$row->PART_33,
            'part_34'=>$row->PART_34,
            'part_35' => $row->PART_35,
            'part_35a' => $split[0],
            'part_35b' => $split[1],
            'part_35c' => $row->PART_35b,
            'part_36'=>$row->PART_36,
            'part_37'=>$row->PART_37,
            'part_38'=>$row->PART_38,
            'part_39'=>$row->PART_39,
            'part_40'=>$row->PART_40,
            'part_41'=>$row->PART_41,
            'part_42'=>$row->PART_42,
            'part_43'=>$row->PART_43,
            'part_44'=>$row->PART_44,
            'part_45'=>$row->PART_45,
            'part_46'=>$row->PART_46,
            'part_47'=>$row->PART_47,
            'part_48'=>$row->PART_48,
            'part_49'=>$row->PART_49,
            'part_50'=>$row->PART_50,
            'part_51'=>$row->PART_51);
            
    }
    public function update(){
        $dane = array('PART_1' => $this->input->post('part_1'),
            'PART_2' => $this->input->post('part_2'),
            'PART_3' => $this->input->post('part_3'),
            'PART_3a'=>$this->input->post('part_3a'),
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
        
        $this->db->update('Dane_firmy_'.$this->session->userdata('name').'',$dane);
    }
}
