<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageUser
 *
 * @author emplast
 */
class PageUser extends CI_Controller {

    public function index() {
        $this->load->library('form_validation');
        $this->load->helper('xml');
        $this->load->model('daneFirmy_model');
        $this->load->model('addNewMagazyn_model');
        $magazyn = new AddNewMagazyn_model();


        $this->form_validation->set_rules('part_35a', 'Numer', 'callback_numerMagazynu');
        $this->form_validation->set_rules('part_35b', 'Symbol', 'callback_numerMagazynu');
        $this->form_validation->set_rules('part_35c', 'Opis', 'callback_numerMagazynu');
        $this->form_validation->set_message('numerMagazynu', 'Musisz założyć magazyn ponieważ nie ma takiego magazynu !!!');
        if ($this->form_validation->run() == FALSE) {

            if (!empty($this->session->userdata('zalogowany'))) {

                $dane = new DaneFirmy_model();

                $this->load->helper('form');
                $this->load->view('pageUser');
                if (!empty($this->session->userdata('zalogowany'))) {
                    $this->load->view('menu', array('login' => $this->session->userdata('name')));
                } else {
                    $this->load->view('menu', array('login' => null));
                }
                $this->load->view('menuApplication');

                if ($dane->dane()['part_7'] == 1) {
                    $part_7 = TRUE;
                } else {
                    $part_7 = FALSE;
                }
                if ($dane->dane()['part_8'] == 1) {
                    $part_8 = TRUE;
                } else {
                    $part_8 = FALSE;
                }
                if ($dane->dane()['part_9'] == 1) {
                    $part_9 = TRUE;
                } else {
                    $part_9 = FALSE;
                }
                if ($dane->dane()['part_10'] == 1) {
                    $part_10 = TRUE;
                } else {
                    $part_10 = FALSE;
                }
                if ($dane->dane()['part_11'] == 1) {
                    $part_11 = TRUE;
                } else {
                    $part_11 = FALSE;
                }
                if ($dane->dane()['part_12'] == 1) {
                    $part_12 = TRUE;
                } else {
                    $part_12 = FALSE;
                }
                if ($dane->dane()['part_13'] == 1) {
                    $part_13 = TRUE;
                } else {
                    $part_13 = FALSE;
                }
                if ($dane->dane()['part_14'] == 1) {
                    $part_14 = TRUE;
                } else {
                    $part_14 = FALSE;
                }
                if ($dane->dane()['part_15'] == 1) {
                    $part_15 = TRUE;
                } else {
                    $part_15 = FALSE;
                }
                if ($dane->dane()['part_16'] == 1) {
                    $part_16 = TRUE;
                } else {
                    $part_16 = FALSE;
                }
                if ($dane->dane()['part_17'] == 1) {
                    $part_17 = TRUE;
                } else {
                    $part_17 = FALSE;
                }
                if ($dane->dane()['part_35'] == 1) {
                    $part_35 = TRUE;
                } else {
                    $part_35 = FALSE;
                }
                if ($dane->dane()['part_37'] == 1) {
                    $part_37 = TRUE;
                } else {
                    $part_37 = FALSE;
                }
                if ($dane->dane()['part_38'] == 1) {
                    $part_38 = TRUE;
                } else {
                    $part_38 = FALSE;
                }
                if ($dane->dane()['part_39'] == 1) {
                    $part_39 = TRUE;
                } else {
                    $part_39 = FALSE;
                }
                if ($dane->dane()['part_40'] == 1) {
                    $part_40 = TRUE;
                } else {
                    $part_40 = FALSE;
                }
                if ($dane->dane()['part_41'] == 1) {
                    $part_41 = TRUE;
                } else {
                    $part_41 = FALSE;
                }
                if ($dane->dane()['part_42'] == 1) {
                    $part_42 = TRUE;
                } else {
                    $part_42 = FALSE;
                }
                if ($dane->dane()['part_43'] == 1) {
                    $part_43 = TRUE;
                } else {
                    $part_43 = FALSE;
                }
                if ($dane->dane()['part_44'] == 1) {
                    $part_44 = TRUE;
                } else {
                    $part_44 = FALSE;
                }
                if ($dane->dane()['part_51'] == 1) {
                    $part_51 = TRUE;
                } else {
                    $part_51 = FALSE;
                }



                $dom = new DOMDocument;
                $dom->preserveWhiteSpace = False;
                $dom->load('xml/UrzedySkarbowe.xml');
                $nazwy = $dom->getElementsByTagName('annotation');
                $i = 0;
                foreach ($nazwy as $nazwa) {
                    $urzedy = $nazwa->getElementsByTagName('documentation');
                    $urzad = $urzedy->item(0)->nodeValue;
                    $tmp[] = $urzad;
                }

                switch ($dane->dane()['part_3a']) {
                    case 0:
                        $flags = 'europeanunion.png';
                        break;
                    case 1:
                        $flags = 'at.png';
                        break;
                    case 2:
                        $flags = 'be.png';
                        break;
                    case 3:
                        $flags = 'bg.png';
                        break;
                    case 4:
                        $flags = 'cy.png';
                        break;
                    case 5:
                        $flags = 'cz.png';
                        break;
                    case 6:
                        $flags = 'de.png';
                        break;
                    case 7:
                        $flags = 'dk.png';
                        break;
                    case 8:
                        $flags = 'ee.png';
                        break;
                    case 9:
                        $flags = 'es.png';
                        break;
                    case 10:
                        $flags = 'fi.png';
                        break;
                    case 11:
                        $flags = 'fr.png';
                        break;
                    case 12:
                        $flags = 'gb.png';
                        break;
                    case 13:
                        $flags = 'hr.png';
                        break;
                    case 14:
                        $flags = 'hu.png';
                        break;
                    case 15:
                        $flags = 'ie.png';
                        break;
                    case 16:
                        $flags = 'it.png';
                        break;
                    case 17:
                        $flags = 'lt.png';
                        break;
                    case 18:
                        $flags = 'lu.png';
                        break;
                    case 19:
                        $flags = 'lv.png';
                        break;
                    case 20:
                        $flags = 'mt.png';
                        break;
                    case 21:
                        $flags = 'nl.png';
                        break;
                    case 22:
                        $flags = 'pl.png';
                        break;
                    case 23:
                        $flags = 'pt.png';
                        break;
                    case 24:
                        $flags = 'ro.png';
                        break;
                    case 25:
                        $flags = 'se.png';
                        break;
                    case 26:
                        $flags = 'si.png';
                        break;
                    case 27:
                        $flags = 'sk.png';
                        break;
                }



                $this->load->view('pageUserData', array('urzedy' => $tmp, 'part_1' => $dane->dane()['part_1'],
                    'part_2' => $dane->dane()['part_2'],
                    'part_3' => $dane->dane()['part_3'],
                    'part_3a' => $dane->dane()['part_3a'],
                    'part_4' => $dane->dane()['part_4'],
                    'part_5' => $dane->dane()['part_5'],
                    'part_6' => $dane->dane()['part_6'],
                    'part_7' => $part_7,
                    'part_8' => $part_8,
                    'part_9' => $part_9,
                    'part_10' => $part_10,
                    'part_11' => $part_11,
                    'part_12' => $part_12,
                    'part_13' => $part_13,
                    'part_14' => $part_14,
                    'part_15' => $part_15,
                    'part_16' => $part_16,
                    'part_17' => $part_17,
                    'part_18' => $dane->dane()['part_18'],
                    'part_19' => $dane->dane()['part_19'],
                    'part_20' => $dane->dane()['part_20'],
                    'part_21' => $dane->dane()['part_21'],
                    'part_22' => $dane->dane()['part_22'],
                    'part_23' => $dane->dane()['part_23'],
                    'part_24' => $dane->dane()['part_24'],
                    'part_25' => $dane->dane()['part_25'],
                    'part_26' => $dane->dane()['part_26'],
                    'part_27' => $dane->dane()['part_27'],
                    'part_28' => $dane->dane()['part_28'],
                    'part_29' => $dane->dane()['part_29'],
                    'part_30' => $dane->dane()['part_30'],
                    'part_31' => $dane->dane()['part_31'],
                    'part_32' => $dane->dane()['part_32'],
                    'part_33' => $dane->dane()['part_33'],
                    'part_34' => $dane->dane()['part_34'],
                    'part_35' => $part_35,
                    'part_35a' => $dane->dane()['part_35a'],
                    'part_35b' => $dane->dane()['part_35b'],
                    'part_35c' => $dane->dane()['part_35c'],
                    'part_36' => $dane->dane()['part_36'],
                    'part_37' => $part_37,
                    'part_38' => $part_38,
                    'part_39' => $part_39,
                    'part_40' => $part_40,
                    'part_41' => $part_41,
                    'part_42' => $part_42,
                    'part_43' => $part_43,
                    'part_44' => $part_44,
                    'part_45' => $dane->dane()['part_45'],
                    'part_46' => $dane->dane()['part_46'],
                    'part_47' => $dane->dane()['part_47'],
                    'part_48' => $dane->dane()['part_48'],
                    'part_49' => $dane->dane()['part_49'],
                    'part_50' => $dane->dane()['part_50'],
                    'part_51' => $part_51,
                    'flags' => $flags));


                $this->load->view('footerApplication');
            } else {
                redirect('index.php/Welcome/index');
            }
        } else {

           $this->update();
        }
    }

    public function update() {

        $this->load->model('daneFirmy_model');
        $dane = new DaneFirmy_model();
        $dane->update();



        if (!empty($this->session->userdata('zalogowany'))) {


            $this->load->helper('form');
            $this->load->view('pageUser');
            if (!empty($this->session->userdata('zalogowany'))) {
                $this->load->view('menu', array('login' => $this->session->userdata('name')));
            } else {
                $this->load->view('menu', array('login' => null));
            }
            $this->load->view('menuApplication');

            if ($dane->dane()['part_7'] == 1) {
                $part_7 = TRUE;
            } else {
                $part_7 = FALSE;
            }
            if ($dane->dane()['part_8'] == 1) {
                $part_8 = TRUE;
            } else {
                $part_8 = FALSE;
            }
            if ($dane->dane()['part_9'] == 1) {
                $part_9 = TRUE;
            } else {
                $part_9 = FALSE;
            }
            if ($dane->dane()['part_10'] == 1) {
                $part_10 = TRUE;
            } else {
                $part_10 = FALSE;
            }
            if ($dane->dane()['part_11'] == 1) {
                $part_11 = TRUE;
            } else {
                $part_11 = FALSE;
            }
            if ($dane->dane()['part_12'] == 1) {
                $part_12 = TRUE;
            } else {
                $part_12 = FALSE;
            }
            if ($dane->dane()['part_13'] == 1) {
                $part_13 = TRUE;
            } else {
                $part_13 = FALSE;
            }
            if ($dane->dane()['part_14'] == 1) {
                $part_14 = TRUE;
            } else {
                $part_14 = FALSE;
            }
            if ($dane->dane()['part_15'] == 1) {
                $part_15 = TRUE;
            } else {
                $part_15 = FALSE;
            }
            if ($dane->dane()['part_16'] == 1) {
                $part_16 = TRUE;
            } else {
                $part_16 = FALSE;
            }
            if ($dane->dane()['part_17'] == 1) {
                $part_17 = TRUE;
            } else {
                $part_17 = FALSE;
            }
            if ($dane->dane()['part_35'] == 1) {
                $part_35 = TRUE;
            } else {
                $part_35 = FALSE;
            }
            if ($dane->dane()['part_37'] == 1) {
                $part_37 = TRUE;
            } else {
                $part_37 = FALSE;
            }
            if ($dane->dane()['part_38'] == 1) {
                $part_38 = TRUE;
            } else {
                $part_38 = FALSE;
            }
            if ($dane->dane()['part_39'] == 1) {
                $part_39 = TRUE;
            } else {
                $part_39 = FALSE;
            }
            if ($dane->dane()['part_40'] == 1) {
                $part_40 = TRUE;
            } else {
                $part_40 = FALSE;
            }
            if ($dane->dane()['part_41'] == 1) {
                $part_41 = TRUE;
            } else {
                $part_41 = FALSE;
            }
            if ($dane->dane()['part_42'] == 1) {
                $part_42 = TRUE;
            } else {
                $part_42 = FALSE;
            }
            if ($dane->dane()['part_43'] == 1) {
                $part_43 = TRUE;
            } else {
                $part_43 = FALSE;
            }
            if ($dane->dane()['part_44'] == 1) {
                $part_44 = TRUE;
            } else {
                $part_44 = FALSE;
            }
            if ($dane->dane()['part_51'] == 1) {
                $part_51 = TRUE;
            } else {
                $part_51 = FALSE;
            }

            $dom = new DOMDocument;
            $dom->preserveWhiteSpace = False;
            $dom->load('xml/UrzedySkarbowe.xml');
            $nazwy = $dom->getElementsByTagName('annotation');
            $i = 0;
            foreach ($nazwy as $nazwa) {
                $urzedy = $nazwa->getElementsByTagName('documentation');
                $urzad = $urzedy->item(0)->nodeValue;
                $tmp[] = array(
                    $i => $urzad,
                );
                $i++;
            }

            switch ($dane->dane()['part_3a']) {
                case 0:
                    $flags = 'europeanunion.png';
                    break;
                case 1:
                    $flags = 'at.png';
                    break;
                case 2:
                    $flags = 'be.png';
                    break;
                case 3:
                    $flags = 'bg.png';
                    break;
                case 4:
                    $flags = 'cy.png';
                    break;
                case 5:
                    $flags = 'cz.png';
                    break;
                case 6:
                    $flags = 'de.png';
                    break;
                case 7:
                    $flags = 'dk.png';
                    break;
                case 8:
                    $flags = 'ee.png';
                    break;
                case 9:
                    $flags = 'es.png';
                    break;
                case 10:
                    $flags = 'fi.png';
                    break;
                case 11:
                    $flags = 'fr.png';
                    break;
                case 12:
                    $flags = 'gb.png';
                    break;
                case 13:
                    $flags = 'hr.png';
                    break;
                case 14:
                    $flags = 'hu.png';
                    break;
                case 15:
                    $flags = 'ie.png';
                    break;
                case 16:
                    $flags = 'it.png';
                    break;
                case 17:
                    $flags = 'lt.png';
                    break;
                case 18:
                    $flags = 'lu.png';
                    break;
                case 19:
                    $flags = 'lv.png';
                    break;
                case 20:
                    $flags = 'mt.png';
                    break;
                case 21:
                    $flags = 'nl.png';
                    break;
                case 22:
                    $flags = 'pl.png';
                    break;
                case 23:
                    $flags = 'pt.png';
                    break;
                case 24:
                    $flags = 'ro.png';
                    break;
                case 25:
                    $flags = 'se.png';
                    break;
                case 26:
                    $flags = 'si.png';
                    break;
                case 27:
                    $flags = 'sk.png';
                    break;
            }


            $this->load->view('pageUserData', array('urzedy' => $tmp, 'part_1' => $dane->dane()['part_1'],
                'part_2' => $dane->dane()['part_2'],
                'part_3' => $dane->dane()['part_3'],
                'part_3a' => $dane->dane()['part_3a'],
                'part_4' => $dane->dane()['part_4'],
                'part_5' => $dane->dane()['part_5'],
                'part_6' => $dane->dane()['part_6'],
                'part_7' => $part_7,
                'part_8' => $part_8,
                'part_9' => $part_9,
                'part_10' => $part_10,
                'part_11' => $part_11,
                'part_12' => $part_12,
                'part_13' => $part_13,
                'part_14' => $part_14,
                'part_15' => $part_15,
                'part_16' => $part_16,
                'part_17' => $part_17,
                'part_18' => $dane->dane()['part_18'],
                'part_19' => $dane->dane()['part_19'],
                'part_20' => $dane->dane()['part_20'],
                'part_21' => $dane->dane()['part_21'],
                'part_22' => $dane->dane()['part_22'],
                'part_23' => $dane->dane()['part_23'],
                'part_24' => $dane->dane()['part_24'],
                'part_25' => $dane->dane()['part_25'],
                'part_26' => $dane->dane()['part_26'],
                'part_27' => $dane->dane()['part_27'],
                'part_28' => $dane->dane()['part_28'],
                'part_29' => $dane->dane()['part_29'],
                'part_30' => $dane->dane()['part_30'],
                'part_31' => $dane->dane()['part_31'],
                'part_32' => $dane->dane()['part_32'],
                'part_33' => $dane->dane()['part_33'],
                'part_34' => $dane->dane()['part_34'],
                'part_35' => $part_35,
                'part_35a' => $dane->dane()['part_35a'],
                'part_35b' => $dane->dane()['part_35b'],
                'part_35c' => $dane->dane()['part_35c'],
                'part_36' => $dane->dane()['part_36'],
                'part_37' => $part_37,
                'part_38' => $part_38,
                'part_39' => $part_39,
                'part_40' => $part_40,
                'part_41' => $part_41,
                'part_42' => $part_42,
                'part_43' => $part_43,
                'part_44' => $part_44,
                'part_45' => $dane->dane()['part_45'],
                'part_46' => $dane->dane()['part_46'],
                'part_47' => $dane->dane()['part_47'],
                'part_48' => $dane->dane()['part_48'],
                'part_49' => $dane->dane()['part_49'],
                'part_50' => $dane->dane()['part_50'],
                'part_51' => $part_51,
                'flags' => $flags));
            $this->load->view('footerApplication');
        } else {
            redirect('index.php/Welcome/index');
        }
    }

    function numerMagazynu() {
        $this->load->model('addNewMagazyn_model');
        $magazyn = new AddNewMagazyn_model();

        if ($magazyn->sprawdzenie() != 0) {
            return TRUE;
        } else {

            return FALSE;
        }
    }

}
