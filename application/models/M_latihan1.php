<?php
Class M_latihan extends CI_Model{


    function get_dekorasi($limit, $page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('tb_dekorasi')->result_array();
        return $data;
    }
    function page_dekorasi(){
        $data=$this->db->get('tb_dekorasi')->num_rows();
        return $data;
    }
    public function getdelete($key)
	{
		$this->db->where('id_dekorasi',$key);
		$this->db->delete('tb_dekorasi');
	}	
    function save_registerdeokrasi($post){
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
            $this->load->library('upload', $konfigurasi);
            $this->upload->do_upload('foto');
            $data=array(

            'nama_dekorasi'=>$post['nama_dekorasi'],
            'jenis_dekorasi'=>$post['jenis_dekorasi'],
            'harga_sewa'=>$post['harga_sewa'],
            'detail_dekorasi'=>$post['detail_dekorasi'],
            'ketersediaan'=>$post['ketersediaan'],
            'foto'=>$_FILES['foto']['name'],
        );
        $this->db->insert('tb_dekorasi',$data);
    }


    function save_update_register_dekorasi($post){
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
            $this->load->library('upload', $konfigurasi);
            $this->upload->do_upload('foto');
            $data=array(

            'nama_dekorasi'=>$post['nama_dekorasi'],
            'jenis_dekorasi'=>$post['jenis_dekorasi'],
            'harga_sewa'=>$post['harga_sewa'],
            'detail_dekorasi'=>$post['detail_dekorasi'],
            'ketersediaan'=>$post['ketersediaan'],
            'foto'=>$_FILES['foto']['name'],
        );
        $this->db->where('md5(id_dekorasi)',$post['id_dekorasi']);
        $this->db->update('tb_dekorasi',$data);
    }
    function get_penyewa($limit, $page){
        $this->db->limit($limit, $page);
        $this->db->join('tb_dekorasi','tb_dekorasi.id_dekorasi=tb_penyewa.id_dekorasi');
        $data=$this->db->get('tb_penyewa')->result_array();
        return $data;
    }
    function page_penyewa(){
        $this->db->join('tb_dekorasi','tb_dekorasi.id_dekorasi=tb_penyewa.id_dekorasi');
        $data=$this->db->get('tb_penyewa')->num_rows();
        return $data;
    }
    function get_namadekorasi(){
        $this->db->where('ketersediaan', 'TERSEDIA');
        $data=$this->db->get('tb_dekorasi')->result_array();
        return $data;
    }
    public function getdeletepenyewa($key)
	{
		$this->db->where('id_penyewa',$key);
		$this->db->delete('tb_penyewa');
	}
    function save_registerpenyewa($post){
        $data=array(
            'nama_penyewa'=>$post['nama_penyewa'],
            'alamat_penyewa'=>$post['alamat_penyewa'],
            'no_telepon'=>$post['no_telepon'],
            'no_ktp'=>$post['no_ktp'],
            'email'=>$post['email'],
            'id_dekorasi'=>$post['id_dekorasi'],
            'tgl_pinjam'=>$post['tgl_pinjam'],
            'pembayaran'=>$post['pembayaran'],
        );
        $update=array(
            'ketersediaan'=>'TIDAK TERSEDIA'
        );
            $this->db->insert('tb_penyewa',$data);
            $this->db->where('id_dekorasi', $post['id_dekorasi']);
            $this->db->update('tb_dekorasi',$update);
    }

    function save_update_register_penyewa($post){
        $data=array(
            'nama_penyewa'=>$post['nama_penyewa'],
            'alamat_penyewa'=>$post['alamat_penyewa'],
            'no_telepon'=>$post['no_telepon'],
            'no_ktp'=>$post['no_ktp'],
            'email'=>$post['email'],
            'id_dekorasi'=>$post['id_dekorasi'],
            'tgl_pinjam'=>$post['tgl_pinjam'],
            'tgl_kembali'=>$post['tgl_kembali'],
            'pembayaran'=>$post['pembayaran'],
            'total_sewa'=>$post['total_sewa'],
            'denda'=>$post['denda'],
        );
        $perbarui=array(
            'pembayaran'=>'Lunas'
        );
            $this->db->where('md5(id_penyewa)',$post['id_penyewa']);
            $this->db->update('tb_penyewa',$data);
            $this->db->update('tb_penyewa',$perbarui);
    }
    function get_transaksi($limit, $page){
        $this->db->limit($limit, $page);
        $this->db->where('pembayaran', 'Belum Bayar');
        $this->db->join('tb_dekorasi','tb_dekorasi.id_dekorasi=tb_penyewa.id_dekorasi');
        $data=$this->db->get('tb_penyewa')->result_array();
        return $data;
    }
    function page_transaksi(){
        $this->db->join('tb_dekorasi','tb_dekorasi.id_dekorasi=tb_penyewa.id_dekorasi');
        $data=$this->db->get('tb_penyewa')->num_rows();
        return $data;
    }
    function get_namapembayaran(){
        $data=$this->db->get('tb_dekorasi')->result_array();
        return $data;
    }
    function get_user($limit, $page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('tb_member')->result_array();
        return $data;
    }
    function page_user(){
        $data=$this->db->get('tb_member')->num_rows();
        return $data;
    }

    function save_registeruser($post){
            $data=array(
                'username'=>$post['username'],
                'password'=>$post['password'],
        );
        $this->db->insert('tb_member',$data);
    }

    function get_mobil_frontend(){
        $data=$this->db->get('tb_dekorasi')->result_array();
        return $data;
    }
    function cek_login($table, $where){
        return $this->db->get_where($table, $where);
    }

}?>