<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        // TODO: redirect somewhere
    }
    
    public function companyNews() {
        $this->load->view('company_news');
    }
    
    public function groupProfile() {
        $this->load->view('group_profile');
    }
    
    public function careers() {
        $this->load->view('careers');
    }

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */