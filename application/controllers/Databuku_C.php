<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Databuku_C extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Databuku_model');
        $this->load->model('Auth_model');
        $this->load->helper('url'); 
    }

    public function index(){
        $data['title'] = 'List Data Buku';
        $data['data_buku'] = $this->Databuku_model->getAll();
        $this->load->view('front_end/admin/dashboard', $data);
    }

    public function halaman_tambah(){
        $this->load->view('front_end/admin/halaman_tambah');
    }

   
   

    public function tambah_buku(){
        $nama_buku = $this->input->post('nama_buku');
        $nama_penulis = $this->input->post('nama_penulis');
        $genres = $this->input->post('genre');
        $genre = implode(',', $genres);
        $tahun_buku = $this->input->post('tahun');
        $deskripsi = $this->input->post('deskripsi');
        $links = $this->input->post('links');

        $data = array(
            'nama_buku' => $nama_buku,
            'penulis' => $nama_penulis,
            'genre' => $genre,
            'tahun' => $tahun_buku,
            'deskripsi' => $deskripsi,
            'links' => $links,
            
        );
        $this->Databuku_model->tambahDataBuku($data);
        redirect(base_url('Databuku_C/index'));
    }

    public function edit($id){

        $data['data_buku'] = $this->Databuku_model->getByID($id);
        $this->load->view('front_end/admin/update',$data);
    }

    public function updatedata(){
        $data = $this->Databuku_model;
        
            $data->updatedata();
            redirect(base_url('Databuku_C/index'));
        
    
}

public function hapusdata($id = null){

    if ($this->Databuku_model->hapus($id)){
        redirect(base_url('Databuku_C/index'));
    }
}


}



?>