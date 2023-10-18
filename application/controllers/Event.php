<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MEvent');
    }

    public function index()
    {
        $data['event'] = $this->MEvent->getAll();
        $this->load->view("Theme/Header",$data);
        $this->load->view("Theme/Menu");
        $this->load->view("Event/Index");
        $this->load->view("Theme/Footer");
    }

    public function insert()
    {
        $insert = $this-> MEvent->create();

        if ($insert) {
            redirect('Event');
        } else {
            echo "gagal";
        }
    }

    public function update($id_event)
    {
        $update = $this->MEvent->update($id_event);

        if ($update) {
            redirect('Event') ;
        } else {
            echo "gagal" ; 
        }
    }

    public function delete($id_event)
    {
        $delete = $this->MEvent->delete($id_event);

        if ($delete) {
            redirect('Event') ;
        } else {
            echo "gagal";
        }
    }
}