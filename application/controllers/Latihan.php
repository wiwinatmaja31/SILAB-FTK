<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Latihan extends CI_Controller{
    function __construct()
    { parent :: __construct();
        $this->load->model('M_latihan');
    }
    function index(){
            $data['title']="Tampilan Beranda";
            $data['meta']="Dhama Putra";
            $data['beranda']="beranda";
            $data['sidebar']="sidebar";
        $this->load->view('template',$data);
    }
    
    function sejarah_desa(){
        $data['title']="Tampilan Beranda";
        $data['meta']="Dhama Putra";
        $data['beranda']="sejarah_desa";
        $data['sejarah_desa'] = $this->M_latihan->sejarah_desa(); 
        $data['sidebar']="sidebar";
    $this->load->view('template',$data);
    }
    
    function kondisi_umum(){
        $data['title']="kondisi umum desa";
        $data['meta']="Dhama Putra";
        $data['beranda']="kondisi_umum";
        $data['sidebar']="sidebar";
    $this->load->view('template',$data);
    } 
    
    function kepala_desa(){
        $data['title']="Kepala Desa";
        $data['meta']="Dhama Putra";
        $data['beranda']="kepala_desa";
        $data['sidebar']="sidebar";
    $this->load->view('template',$data);
    }  
    
    function perangkat_desa($page=0){
        $data['title']="Perankat Desa";
        $data['meta']="ini adalah berita";
        $config['total_rows']=$this->M_latihan->get_num_rows('data_penduduk');
        $config['per_page']=2;
        $config['base_url']=site_url('latihan/perangkat_desa');
        $data['data_penduduk']=$this->M_latihan->perangkat_desa($config['per_page'],$page); 
        $this->pagination->initialize($config);
        $data['beranda']="perangkat_desa";
        $data['sidebar']="sidebar";

        $this->load->view('template',$data);
    }

    function berita(){
        $data['title']="Daftar Berita";
        $data['meta']="Dhama Putra";
        $data['beranda']="berita";
        $data['berita'] = $this->M_latihan->berita(); 
        $data['sidebar']="sidebar";
    $this->load->view('template',$data);
    }

    function agenda($page=0){
        $data['title']="Agenda Acara";
        $data['meta']="Agenda acara desa";
        $config['total_rows']=$this->M_latihan->get_num_rows('agenda');
        $config['per_page']=1;
        $config['base_url']=site_url('latihan/agenda');
        $data['agenda']=$this->M_latihan->get_agenda($config['per_page'],$page); 
        $this->pagination->initialize($config);
        $data['beranda']="agenda";
        $data['sidebar']="sidebar";
        
    $this->load->view('template',$data);
    }

    function data_pendidikan($page=0){
        $data['title']="Data Pendidikan";
        $data['meta']="Dhama Putra";
        $config['total_rows']=$this->M_latihan->get_num_rows('data_penduduk');
        $config['per_page']=2;
        $config['base_url']=site_url('latihan/data_pendidikan');
        $data['data_penduduk']=$this->M_latihan->get_data_penduduk($config['per_page'],$page); 
        $this->pagination->initialize($config);
        $data['beranda']="data_pendidikan";
        $data['sidebar']="sidebar";

    $this->load->view('template',$data);
    }

    function data_pekerjaan($page=0){
        $data['title']="Data Pekerjaan";
        $data['meta']="Dhama Putra";
        $config['total_rows']=$this->M_latihan->get_num_rows('data_penduduk');
        $config['per_page']=2;
        $config['base_url']=site_url('latihan/data_pekerjaan');
        $data['data_penduduk']=$this->M_latihan->get_data_penduduk($config['per_page'],$page); 
        $this->pagination->initialize($config);
        $data['beranda']="data_pekerjaan";
        $data['sidebar']="sidebar";

    $this->load->view('template',$data);
    }

    function data_agama($page=0){
       
        $data['title']="Data Agama";
        $data['meta']="Dhama Putra";
        $config['total_rows']=$this->M_latihan->get_num_rows('data_penduduk');
        $config['per_page']=2;
        $config['base_url']=site_url('latihan/data_agama');
        $data['data_penduduk']=$this->M_latihan->get_data_penduduk($config['per_page'],$page); 
        $this->pagination->initialize($config);
        $data['beranda']="data_agama";
        $data['sidebar']="sidebar";

    $this->load->view('template',$data);
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['data_penduduk']=$this->M_latihan->get_data_penduduk_keyword($keyword);
        $data['beranda']="data_agama";
        $this->load->view('template',$data);
    }

    function kritik_saran($page=0){
        $data['title']="kritik dan saran";
        $data['meta']="kritik dan saran";
        $config['total_rows']=$this->M_latihan->get_num_rows('kritik_saran');
        $config['per_page']=10;
        $config['base_url']=site_url('latihan/kritik_saran');
        $data['kritik_saran']=$this->M_latihan->get_kritik_saran($config['per_page'],$page); 
        $data['beranda']="kritik_saran";
        $data['sidebar']="sidebar";

    $this->load->view('template',$data);
    }

    function kirim_kritik(){
        //mengirim post ke model
        $this->M_latihan->kirim_kritik($_POST);
        //akses fungsi untuk menampilkan halaman daftar peserta
        redirect('latihan/kritik_saran');
    }
}?>