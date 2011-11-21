<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Projects extends CI_Controller {

    public function index() {
        // TODO: redirect somewhere
    }
    
    public function technology() {
        $this->load->view('technology');
    }
    
    public function recentProjects() {
        $this->load->view('recentProjects');
    }
    
    public function clients() {
        $this->load->view('clients');
    }

}

/* End of file projects.php */
/* Location: ./application/controllers/projects.php */