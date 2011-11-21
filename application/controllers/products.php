<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends CI_Controller {

    public function index() {
        // TODO: redirect somewhere
    }
    
    public function concreteEquipment() {
        $this->load->view('concrete_equipment');
    }
    
    public function automaticDoors() {
        $this->load->view('automatic_doors');
    }
    
    public function industrialApplications() {
        $this->load-view('industrial_applications');
    }

}

/* End of file products.php */
/* Location: ./application/controllers/products.php */
