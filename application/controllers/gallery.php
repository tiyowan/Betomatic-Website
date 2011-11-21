<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function index() {
        $this->load->view('home');
    }
    
    public function concreteEquipment() {
        $this->load->view('concrete_equipment');
    }
    
    public function gateAutomation() {
        $this->load->view('gate_automation');
    }
    
    public function castAluminium() {
        $this->load->view('cast_aluminium');
    }

}

/* End of file gallery.php */
/* Location: ./application/controllers/gallery.php */
