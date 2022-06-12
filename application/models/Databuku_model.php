<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Databuku_Model extends CI_Model{
    private $table = 'data_buku';

    public function rules(){
        return [
            [
                'field' => 'nama_buku',
                'label' => 'nama_buku',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'penulis',
                'label' => 'penulis',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'genre',
                'label' => 'genre',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tahun',
                'label' => 'tahun',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'deskripsi',
                'label' => 'deskripsi',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getById($id){
        return $this->db->get_where($this->table,['id'=>$id])->row();
    }

    public function getAll(){
        $this->db->from($this->table);
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function tambahDataBuku($data){
        $this->db->insert('data_buku', $data);
    }

    public function updatedata(){
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->nama_buku = $post['nama_buku'];
        $this->penulis = $post['penulis'];
        $this->genre = $post['genre'];
        $this->tahun = $post['tahun'];
        $this->deskripsi = $post['deskripsi'];
        $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function hapus($id){
        return $this->db->delete($this->table, array('id' => $id));
    }
}


?>