<?php
Class M_silab extends CI_Model{


    function get_prodi($limit, $page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('tb_prodi')->result_array();
        return $data;
    }
    function page_prodi(){
        $data=$this->db->get('tb_prodi')->num_rows();
        return $data;
    }
    public function get_data_prodi_keyword($keyword){ //search lokasi
        $this->db->from('tb_prodi');
        $this->db->like('nama_prodi',$keyword);
        $this->db->or_like('jurusan',$keyword);
        return $this->db->get()->result_array();
    }
    public function getdelete_prodi($key)
	{
		$this->db->where('id_prodi',$key);
		$this->db->delete('tb_prodi');
    }
    function save_register_prodi($post){
        $data=array(
        'nama_prodi'=>$post['nama_prodi'],
        'jurusan'=>$post['jurusan'],
        'fakultas'=>$post['fakultas'],
    );
    $this->db->insert('tb_prodi',$data);
}	
    function save_update_registerprodi($post){
            $data=array(
                'nama_prodi'=>$post['nama_prodi'],
                'jurusan'=>$post['jurusan'],
                'fakultas'=>$post['fakultas'],
        );
        $this->db->where('md5(id_prodi)',$post['id_prodi']);
        $this->db->update('tb_prodi',$data);
    }


    function get_lokasi($limit, $page){
        $this->db->limit($limit, $page);
        $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_lokasi.id_prodi');
        $data=$this->db->get('tb_lokasi')->result_array();
        return $data;
    }
    function page_lokasi(){
        $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_lokasi.id_prodi');
        $data=$this->db->get('tb_lokasi')->num_rows();
        return $data;
    }
    public function get_data_lokasi_keyword($keyword){ //search lokasi
        $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_lokasi.id_prodi');
        $this->db->from('tb_lokasi');
        $this->db->like('nama_prodi',$keyword);
        $this->db->or_like('jurusan',$keyword);
        return $this->db->get()->result_array();
    }
    public function getdelete_lokasi($key)
	{
		$this->db->where('id_lokasi',$key);
		$this->db->delete('tb_lokasi');
    }
    function get_namaprodi(){
        $data=$this->db->get('tb_prodi')->result_array();
        return $data;
    }
    function save_register_lokasi($post){
        $data=array(
        'id_prodi'=>$post['id_prodi'],
        'nama_lab'=>$post['nama_lab'],
    );
    $this->db->insert('tb_lokasi',$data);
    }
    	
    function save_update_registerlokasi($post){
            $data=array(
                'id_prodi'=>$post['id_prodi'],
                'nama_lab'=>$post['nama_lab'],
        );
        $this->db->where('md5(id_lokasi)',$post['id_lokasi']);
        $this->db->update('tb_lokasi',$data);
    }

    function get_aset($limit, $page){
        $this->db->limit($limit, $page);
        $this->db->join('tb_lokasi','tb_lokasi.id_lokasi=tb_aset.id_lokasi');
        $data=$this->db->get('tb_aset')->result_array();
        return $data;
    }
    function page_aset(){
        $this->db->join('tb_lokasi','tb_lokasi.id_lokasi=tb_aset.id_lokasi');
        $data=$this->db->get('tb_aset')->num_rows();
        return $data;
    }
    public function get_data_aset_keyword($keyword){ //search lokasi
        $this->db->join('tb_lokasi','tb_lokasi.id_lokasi=tb_aset.id_lokasi');
        $this->db->from('tb_aset');
        $this->db->like('nama_prodi',$keyword);
        $this->db->or_like('jurusan',$keyword);
        return $this->db->get()->result_array();
    }
    public function getdelete_aset($key)
	{
		$this->db->where('kode_aset',$key);
		$this->db->delete('tb_aset');
    }
    function get_namalab(){
        $data=$this->db->get('tb_lokasi')->result_array();
        return $data;
    }
    function save_registeraset($post){
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
            $this->load->library('upload', $konfigurasi);
            $this->upload->do_upload('foto');
            $data=array(
            'id_lokasi'=>$post['id_lokasi'],
            'nama_barang'=>$post['nama_barang'],
            'spesifikasi'=>$post['spesifikasi'],
            'jumlah'=>$post['jumlah'],
            'satuan'=>$post['satuan'],
            'keterangan'=>$post['keterangan'],
            'foto'=>$_FILES['foto']['name'],
    );
    $this->db->insert('tb_aset',$data);
    }
    	
    function save_update_registeraset($post){
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
            $this->load->library('upload', $konfigurasi);
            $this->upload->do_upload('foto');
            $data=array(
            'id_lokasi'=>$post['id_lokasi'],
            'nama_barang'=>$post['nama_barang'],
            'spesifikasi'=>$post['spesifikasi'],
            'jumlah'=>$post['jumlah'],
            'satuan'=>$post['satuan'],
            'keterangan'=>$post['keterangan'],
            'foto'=>$_FILES['foto']['name'],
        );
        $this->db->where('md5(kode_aset)',$post['kode_aset']);
        $this->db->update('tb_aset',$data);
    }


    function get_user($limit, $page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('tb_user')->result_array();
        return $data;
    }
    function page_user(){
        $data=$this->db->get('tb_user')->num_rows();
        return $data;
    }
    public function get_data_user_keyword($keyword){ //search lokasi
        $this->db->from('tb_user');
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        return $this->db->get()->result_array();
    }
    public function getdelete_user($key)
	{
		$this->db->where('id_user',$key);
		$this->db->delete('tb_user');
    }
    function save_register_user($post){
        $data=array(
        'nama'=>$post['nama'],
        'password'=>$post['password'],
        'jabatan'=>$post['jabatan'],
    );
    $this->db->insert('tb_user',$data);
}	
    function save_update_registeruser($post){
            $data=array(
                'nama'=>$post['nama'],
                'password'=>$post['password'],
                'jabatan'=>$post['jabatan'],
        );
        $this->db->where('md5(id_user)',$post['id_user']);
        $this->db->update('tb_user',$data);
    }



    function get_pelaporan($limit, $page){
        $this->db->limit($limit, $page);
        $this->db->join('tb_aset','tb_aset.kode_aset=tb_pelaporan.kode_aset');
        $this->db->join('tb_user','tb_user.id_user=tb_pelaporan.id_user');
        $data=$this->db->get('tb_pelaporan')->result_array();
        return $data;
    }
    function page_pelaporan(){
        $this->db->join('tb_aset','tb_aset.kode_aset=tb_pelaporan.kode_aset');
        $this->db->join('tb_user','tb_user.id_user=tb_pelaporan.id_user');
        $data=$this->db->get('tb_pelaporan')->num_rows();
        return $data;
    }
    function get_namauser(){
        $data=$this->db->get('tb_user')->result_array();
        return $data;
    }
    function get_namaaset2(){
        $data=$this->db->get('tb_aset')->result_array();
        return $data;
    }
    public function get_data_pelaporan_keyword($keyword){ //search lokasi
        $this->db->join('tb_aset','tb_aset.kode_aset=tb_pelaporan.kode_aset');
        $this->db->join('tb_user','tb_user.id_user=tb_pelaporan.id_user');
        $this->db->from('tb_prodi');
        $this->db->like('nama_prodi',$keyword);
        $this->db->or_like('jurusan',$keyword);
        return $this->db->get()->result_array();
    }
    public function getdelete_pelaporan($key)
	{
		$this->db->where('id_pelaporan',$key);
		$this->db->delete('tb_pelaporan');
    }
    function save_register_pelaporan($post){
        $data=array(
        'id_user'=>$post['id_user'],
        'tgl_lapor'=>$post['tgl_lapor'],
        'kode_aset'=>$post['kode_aset'],
        'diskripsi_laporan'=>$post['diskripsi_laporan'],
        'status'=>$post['status'],
        'tanggapan'=>$post['tanggapan'],
    );
    $this->db->insert('tb_pelaporan',$data);
}	
    function save_update_registerpelaporan($post){
            $data=array(
                'id_user'=>$post['id_user'],
                'tgl_lapor'=>$post['tgl_lapor'],
                'kode_aset'=>$post['kode_aset'],
                'diskripsi_laporan'=>$post['diskripsi_laporan'],
                'status'=>$post['status'],
                'tanggapan'=>$post['tanggapan'],
        );
        $this->db->where('md5(id_pelaporan)',$post['id_pelaporan']);
        $this->db->update('tb_pelaporan',$data);
    }
}
?>