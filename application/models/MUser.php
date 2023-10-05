<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MUser extends CI_Model
{
    public $email;
    public $nama_user;
    public $password;

    public function getAll()
    { 
        $query = $this->db->get('tb_user')->result_array();

        return $query;
    }

    public function create()
    { 
        $post = $this->input->post();
        $this->email = $post['email'];
        $this->nama_user = $post['nama_user'];
        $this->password = $post['password'];

        $query = $this->db->insert('tb_user', $this);
        
        if ($query){
            return true;
        } else{
            return false;
        }
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->email = $post['email'];
        $this->nama_user = $post['nama_user'];

        $query = $this->db->update('tb_user', $this, ['id_user'=> $id]);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $query = $this->db->delete('tb_user', ['id_user' => $id]);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}