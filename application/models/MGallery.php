<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MGallery extends CI_Model
{
    public $foto;
    public $ket_foto;

    public function getAll()
    {
        $query = $this->db->get('tb_gallery')->result_array();

        return $query;
    }

    public function create()
    {
        $post = $this->input->post();
        $this->foto = $post['foto'];
        $this->ket_foto = $post['ket_foto'];

        $query = $this->db->insert('tb_gallery', $this);

        if($query){
            return true;
        } else{
            return false;
        }
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->foto = $post['foto'];
        $this->ket_foto = $post['ket_foto'];

        $query = $this->db->insert('tb_gallery', $this, ['id_gallery'=> $id]);

        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $query = $this->db->delete('tb_gallery', ['id_gallery'=> $id]);

        if ($query){
            return true;
        } else {
            return false;
        }
    }
}