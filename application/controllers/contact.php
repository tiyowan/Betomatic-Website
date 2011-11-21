<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index() {
        // TODO: redirect somewhere
    }
    
    public function offices() {
        $this->load->view('offices');
    }
    
    public function inquiries() {
        $this->load->view('inquiries');
    }
    
    public function complaints() {
        $this->load->view('complaints');
    }

}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */