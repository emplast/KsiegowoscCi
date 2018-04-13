<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kontrahenci_model
 *
 * @author emplast
 */
class Kontrahenci_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }
    public function newBase($login){
        
        $query=$this->db->query('CREATE TABLE IF NOT EXISTS Kontrahenci_'.$login.'('
                . 'PART_1 VARCHAR (100),'
                . 'PART_2 VARCHAR (100),'
                . 'PART_3 VARCHAR (100),'
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
                . 'reg_date TIMESTAMP)');
        $query=$this->db->query('SELECT * FROM Dane_firmy_'.$login.'');
        if($query->num_rows()>0){
            $row=$query->row();
            
        }
        $data= array('PART_1'=>$row->PART_1,
            'PART_2'=>$row->PART_2,
            'PART_3'=>$row->PART_22.' '.$row->PART_23.' '.$row->PART_24,
            'PART_4'=>$row->PART_26,
            'PART_5'=>$row->PART_25,
            'PART_6'=>$row->PART_3,
            'PART_7'=>NULL,
            'PART_8'=>$row->PART_5,
            'PART_9'=>$row->PART_6,
            'PART_10'=>$row->PART_28,
            'PART_11'=>$row->PART_30,
            'PART_12'=>NULL,
            'PART_13'=>0,
            'PART_14'=>1,
            'PART_15'=>NULL,
            'PART_16'=>NULL);
        
        $query_1=$this->db->query('SELECT * FROM Kontrahenci_'.$login.'');
        if($query_1->num_rows()==0){
          $this->db->insert('Kontrahenci_'.$login.'',$data);  
        }
       
        
    }
    public function addKontrahent(){
        $login=$this->session->userdata('name');
        $data= array('PART_1'=>$this->input->post('part_1b'),
            'PART_2'=>$this->input->post('part_2b'),
            'PART_3'=> $this->input->post('part_3b'),
            'PART_4'=>$this->input->post('part_4b'),
            'PART_5'=>$this->input->post('part_5b'),
            'PART_6'=>$this->input->post('part_6b'),
            'PART_7'=>$this->input->post('part_7b'),
            'PART_8'=>$this->input->post('part_8b'),
            'PART_9'=> $this->input->post('part_9b'),
            'PART_10'=>$this->input->post('part_10b'),
            'PART_11'=>$this->input->post('part_11b'),
            'PART_12'=>$this->input->post('part_12b'),
            'PART_13'=>$this->input->post('part_13b'),
            'PART_14'=>$this->input->post('part_14b'),
            'PART_15'=>$this->input->post('part_15b'),
            'PART_16'=>$this->input->post('part_17b'),);
       $this->db->insert('Kontrahenci_'.$login.'',$data);
       
    }
    public function userKontrahent(){
        
        $login=$this->session->userdata('name');
        $query=$this->db->query('SELECT * FROM Kontrahenci_'.$login.'');
        
        for($i=0;$i<$query->num_rows();$i++){
            $row[$i]=$query->row_array($i);
            
        }
        return $row;
    }
    public function edit(){
        
        $login=$this->session->userdata('name');
        
        $this->newBase($login);
        
        
        $this->db->where('PART_1',$this->input->post('part_1c'));
        
        $data= array('PART_1'=>$this->input->post('part_1c'),
            'PART_2'=>$this->input->post('part_2c'),
            'PART_3'=> $this->input->post('part_3c'),
            'PART_4'=>$this->input->post('part_4c'),
            'PART_5'=>$this->input->post('part_5c'),
            'PART_6'=>$this->input->post('part_6c'),
            'PART_7'=>$this->input->post('part_7c'),
            'PART_8'=>$this->input->post('part_8c'),
            'PART_9'=> $this->input->post('part_9c'),
            'PART_10'=>$this->input->post('part_10c'),
            'PART_11'=>$this->input->post('part_11c'),
            'PART_12'=>$this->input->post('part_12c'),
            'PART_13'=>$this->input->post('part_13c'),
            'PART_14'=>$this->input->post('part_14c'),
            'PART_15'=>$this->input->post('part_15c'),
            'PART_16'=>$this->input->post('part_17c'),);
        
        $this->db->update('Kontrahenci_'.$login.'',$data);
        
    }
    
}
