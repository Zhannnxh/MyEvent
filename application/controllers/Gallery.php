<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MGallery');
    }

    public function index()
    {
        $data['gallery'] = $this->MGallery->getAll();
        $this->load->view("Theme/Header",$data);
        $this->load->view("Theme/Menu");
        $this->load->view("Gallery/Index");
        $this->load->view("Theme/Footer");
    }
}