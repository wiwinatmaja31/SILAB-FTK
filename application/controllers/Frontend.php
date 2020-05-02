<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend extends CI_Controller{
    function  __construct() { 
        parent :: __construct();
        $this->load->model('M_latihan');
    }
    function sangsit_dekorasi($page=0){
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-left"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $data['title']="Latihan Table";
        $data['meta']="Ini adalah Produk Untuk Latihan Html";
        $config['total_rows']=$this->M_latihan->page_dekorasi();
        $config['per_page']=20;
        $config['base_url']=site_url('Frontend/sangsit_dekorasi');
        $data['id_dekorasi']=$this->M_latihan->get_dekorasi($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='tabel_dekorasi';
    $this->load->view('template_frontend', $data);
    }

    function dekorasi($page=0){
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-left"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $data['title']="Latihan Table";
        $data['meta']="Ini adalah Produk Untuk Latihan Html";
        $config['total_rows']=$this->M_latihan->page_dekorasi();
        $config['per_page']=20;
        $config['base_url']=site_url('Frontend/dekorasi');
        $data['id_dekorasi']=$this->M_latihan->get_dekorasi($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='tabel_dekorasi';
        $this->load->view('dekorasi', $data);
    }
    function login(){
        $this->load->view('login');
    }
    function pesan(){
        $this->load->view('Pesan');
    }
    Function Pesan1(){
        $this->load->view('Pesan1');
    }
    Function Pesan2(){
        $this->load->view('Pesan2');
    }
    Function Pesan3(){
        $this->load->view('Pesan3');
    }
    Function Pesan4(){
        $this->load->view('Pesan4');
    }
    Function Pesan5(){
        $this->load->view('Pesan5');
    }
    Function Pesana(){
        $this->load->view('search');
    }
    
    function tentang_kami(){
        $this->load->view('tentang_kami');
    }

}
?>