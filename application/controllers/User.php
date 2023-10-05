<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MUser');
    }

    public function index()
    {
        $data['user'] = $this->MUser->getAll();
        $this->load->view("Theme/Header",$data);
        $this->load->view("Theme/Menu");
        $this->load->view("User/Index");
        $this->load->view("Theme/Footer");
    }
}