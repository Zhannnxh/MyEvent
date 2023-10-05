<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MEvent extends CI_Model
{
    public $nama_event;
    public $tanggal_event;
    public $tempat_event;
    public $harga;

    public function getAll()
    {
        $query = $this->db->get('tb_event')->result_array();

        return $query;
    }

    public function create()
    {
        $post = $this->input->post();
        $this->nama_event = $post['nama_event'];
        $this->tanggal_event = $post['tanggal_event'];
        $this->tempat_event = $post ['tempat_event'];
        $this->harga = $post ['harga'];

        $query = $this->db->insert('tb_event', $this);

        if ($query){
            return true;
        } else{
            return false;
        }
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->nama_event = $post['nama_event'];
        $this->tanggal_event = $post['tanggal_event'];
        $this->tempat_event = $post['tempat_event'];
        $this->harga = $post['harga'];

        $query = $this->db->update('tb_event', $this, ['id_event'=> $id]);
        
        if ($query){
            return true;
        } else{
            false;
        }
    }

    public function delete($id)
    {
        $query = $this->db->delete('tb_event', ['id_event'=> $id]);

        if ($query){
            return true;
        } else{
            return false;
        }
    }
}
