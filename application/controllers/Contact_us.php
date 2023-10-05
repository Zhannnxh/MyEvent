<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MContact_us');
    }

    public function index()
    {
        $data['contact_us'] = $this->MContact_us->getAll();
        $this->load->view("Theme/Header",$data);
        $this->load->view("Theme/Menu");
        $this->load->view("Contact_us/Index");
        $this->load->view("Theme/Footer");
    }
}