<?php
defined('BASEPATH') OR exit('NO direct script accses allowed');
class Backend extends CI_Controller{
    function  __construct() { 
        parent :: __construct();
        $this->load->model('M_latihan');
    }

function daftar_dekorasi($page=0){
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
        $config['per_page']=4;
        $config['base_url']=site_url('Backend/daftar_dekorasi');
        $data['id_dekorasi']=$this->M_latihan->get_dekorasi($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='tabel_dekorasi';
        $this->load->view('template_backend', $data);
    }
    function register_dekorasi(){
        $data['title']="Registrasi";
        $data['metta']="Ini adalah produk untuk latihan HTML";
        $data['content']='registerdekorasi';
        $this->load->view('template_backend',$data);
    }
    function update_register_dekorasi($id_dekorasi){
        $data['title']="Registrasi";
        $data['metta']="Ini adalah produk untuk latihan HTML";
        $data['content']='registerdekorasi';
        $this->db->where('md5(id_dekorasi)',$id_dekorasi);
        $data['id_dekorasi']=$this->db->get('tb_dekorasi')->row_array();
        $this->load->view('template_backend',$data);
    }
    public function deletedekorasi(){

		$key = $this->uri->segment(3);
		$this->db->where('id_dekorasi',$key);
		$query =$this->db->get('tb_dekorasi');
		if($query->num_rows()>0)
		{
			$this->M_latihan->getdelete($key);
		}
		redirect('Backend/daftar_dekorasi');
	}
    function save_register_dekorasi(){
        if($_POST['id_dekorasi']!=''){
            $this->M_latihan->save_update_register_dekorasi($_POST);
        }else{
        $this->M_latihan->save_registerdeokrasi($_POST);
        
    }
    redirect('Backend/daftar_dekorasi');
}
    function pilih_dekorasi($page=0){
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
    $config['per_page']=4;
    $config['base_url']=site_url('Backend/pilih_dekorasi');
    $data['id_dekorasi']=$this->M_latihan->get_dekorasi($config['per_page'],$page);
    $this->pagination->initialize($config);
    $data['content']='pilih_dekorasi';
    $this->load->view('template_backend', $data);
}
    
    function daftar_penyewa($page=0){
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
        $config['total_rows']=$this->M_latihan->page_penyewa();
        $config['per_page']=3;
        $config['base_url']=site_url('Backend/daftar_penyewa');
        $data['id_penyewa']=$this->M_latihan->get_penyewa($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='tabel_penyewa';
        $this->load->view('template_backend', $data);
    }
    function registerpenyewa(){
        $data['title']="Registrasi";
        $data['metta']="Ini adalah produk untuk latihan HTML";
        $data['content']='registerpenyewa';
        $data['nama_dekorasi']=$this->M_latihan->get_namadekorasi();
        $this->load->view('template_backend',$data);
    }
    function deletepenyewa(){

		$key = $this->uri->segment(3);
		$this->db->where('id_penyewa',$key);
		$query =$this->db->get('tb_penyewa');
		if($query->num_rows()>0)
		{
			$this->M_latihan->getdeletepenyewa($key);
		}
		redirect('Backend/daftar_penyewa');
	}
    function update_register_penyewa($id_penyewa){
        $data['title']="Registrasi";
        $data['metta']="Ini adalah produk untuk latihan HTML";
        $data['content']='bayar';
        $this->db->where('md5(id_penyewa)',$id_penyewa);
        $data['id_penyewa']=$this->db->get('tb_penyewa')->row_array();
        $data['nama_dekorasi']=$this->M_latihan->get_namadekorasi();
        $this->load->view('template_backend',$data);
    }
    function save_registerpenyewa(){
        if($_POST['id_penyewa']!=''){
            $this->M_latihan->save_update_register_penyewa($_POST);
        }else{
            $this->M_latihan->save_registerpenyewa($_POST);
        }
        redirect('Backend/daftar_penyewa');
    }

    function daftar_transaksi($page=0){
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
        $config['total_rows']=$this->M_latihan->page_transaksi();
        $config['per_page']=3;
        $config['base_url']=site_url('Backend/daftar_penyewa');
        $data['id_penyewa']=$this->M_latihan->get_transaksi($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='tabel_transaksi';
        $this->load->view('template_backend', $data);
    }
    function update_register_pembayaran($id_penyewa){
        $data['title']="Registrasi";
        $data['metta']="Ini adalah produk untuk latihan HTML";
        $data['content']='bayar';
        $this->db->where('md5(id_penyewa)',$id_penyewa);
        $data['id_penyewa']=$this->db->get('tb_penyewa')->row_array();
        $data['nama_dekorasi']=$this->M_latihan->get_namapembayaran();
        $this->load->view('template_backend',$data);
    }
    function save_registerpembayaran(){
        if($_POST['id_penyewa']!=''){
            $this->M_latihan->save_update_register_penyewa($_POST);
        }else{
            $this->M_latihan->save_registerpenyewa($_POST);
        }
        redirect('Backend/daftar_transaksi');
    }
    function daftar_user($page=0){
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
        $config['total_rows']=$this->M_latihan->page_user();
        $config['per_page']=2;
        $config['base_url']=site_url('Backend/daftar_user');
        $data['id_member']=$this->M_latihan->get_user($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='tabel_member';
        $this->load->view('template_backend', $data);
    }
    function registeruser(){
        $data['title']="Registrasi";
        $data['metta']="Ini adalah produk untuk latihan HTML";
        $data['content']='register_member';
        $this->load->view('template_backend',$data);
    }
    function save_registeruser(){
        $this->M_latihan->save_registeruser($_POST);
        redirect('Backend/daftar_user');
    }
}
?>