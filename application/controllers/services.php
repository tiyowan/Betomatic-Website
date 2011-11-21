<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Services extends CI_Controller {

    public function index() {
        // TODO: Redirect somewhere
    }
    
    public function maintenanceContracts() {
        $this->load->view('maintenance_contracts');
    }
    
    public function aluminiumCasting() {
        $this->load->view('aluminium_casting');
    }
    
    public function powderCoating() {
        $this->load->view('powder_coating');
    }

}

/* End of file services.php */
/* Location: ./application/controllers/services.php */
