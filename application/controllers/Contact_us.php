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

    public function insert()
    {
        $insert = $this->MContact_us->create();

        if ($insert) {
             redirect('Contact_us');
        } else {
             echo "Gagal" ;
        }
    }

    public function update($id_contact)
    {
        $update = $this->MContact_us->update($id_contact);

        if ($update) {
            redirect('Contact_us');
        } else {
            echo "gagal" ;
        }
    }

    public function delete($id_contact)
    {
        $delete = $this->MContact_us->delete($id_contact);

        if ($delete) {
            redirect ('Contact_us');
        } else {
            echo "gagal";
        }
    }
}