<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("Theme/Header");
        $this->load->view("Theme/Menu");
        $this->load->view("Dashboard/Index");
        $this->load->view("Theme/Footer");
    }
}