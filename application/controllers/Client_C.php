<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_C extends CI_Controller{


 // CLIENT SIDE PAGES
    // public function login(){
    //     $this->load->view('front_end/client/login');
    // }

     
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Databuku_model');
        $this->load->model('Auth_model');
        $this->load->helper('url'); 
    }
    public function home(){
        $data['title'] = 'List Data Buku';
        $data['data_buku'] = $this->Databuku_model->getAll();
        $this->load->view('front_end/client/home');
    }

    public function about(){
        $data['title'] = 'List Data Buku';
        $data['data_buku'] = $this->Databuku_model->getAll();
        $this->load->view('front_end/client/about');
    }   
    public function books(){
        $data['title'] = 'List Data Buku';
        $data['data_buku'] = $this->Databuku_model->getAll();
        $this->load->view('front_end/client/books',$data);
    }   
    public function detail(){
        $data['title'] = 'List Data Buku';
        $data['data_buku'] = $this->Databuku_model->getAll();
        $this->load->view('front_end/client/detail');
    }  
     public function profile(){
        $data['title'] = 'List Data Buku';
        $data['data_buku'] = $this->Databuku_model->getAll();
        $this->load->view('front_end/client/profile');
    }
}
    ?>