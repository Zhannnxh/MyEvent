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

    public function insert()
    {
        $insert = $this->MUser->create();

        if ($insert) {
             redirect('User');
        } else {
             echo "Gagal" ;
        }
    }

    public function update($id_user)
    {
        $update = $this->MUser->update($id_user);

        if ($update) {
            redirect('User');
        } else {
            echo "gagal" ;
        }
    }

    public function delete($id_user)
    {
        $delete = $this->MUser->delete($id_user);

        if ($delete) {
            redirect ('User');
        } else {
            echo "gagal";
        }
    }
}

