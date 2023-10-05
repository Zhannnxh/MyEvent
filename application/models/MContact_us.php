<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MContact_us extends CI_Model
{
    public $nama_contact;
    public $email;
    public $perihal;
    public $pesan;

    public function getAll()
    {
        $query = $this->db->get('tb_contact_us')->result_array();

        return $query;
    }

    public function create()
    {
        $post = $this->input->post();
        $this->nama_contact = $post['nama_contact'];
        $this->email = $post['email'];
        $this->perihal = $post['perihal'];
        $this->pesan = $post['post'];

        $query = $this->db->insert('tb_contact_us', $this);

        if($query){
            return true;
        } else {
            return false;
        }
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->nama_contact = $post['nama_contact'];
        $this->email = $post['email'];
        $this->perihal = $post['perihal'];
        $this->pesan = $post['post'];

        $query = $this->db->insert('tb_contact_us', $this, ['id_contact_us'=>$id]);

        if ($query){
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $query=$this->db->delete('tb_contact_us', ['id_contact_us'=>$id]);

        if($query){
            return true;
        }else{
            return false;
        }
    }
}