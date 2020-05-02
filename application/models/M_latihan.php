<?php
class M_latihan extends CI_Model{

    function perangkat_desa($limit, $page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('data_penduduk')->result();
        $this->db->order_by('Pekerjaan = Perangkat Desa','asc');
        return $data;
       }
    function get_agenda($limit,$page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('agenda')->result();
        return $data;
    }
    function sejarah_desa(){
        $data=$this->db->get('sejarah_desa')->result();
        return $data;
    }
    function berita(){
        $data=$this->db->get('berita')->result();
        return $data;
    }
    function get_data_penduduk($limit,$page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('data_penduduk')->result();
        return $data;
    }
    public function get_data_penduduk_keyword($keyword){
        $this->db->select('*');
        $this->db->from('data_penduduk');
        $this->db->like('Nama',$keyword);
        $this->db->or_like('Agama',$keyword);
        return $this->db->get()->result();
    }
    function get_kritik_saran($limit,$page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('kritik_saran')->result();
        return $data;
    }
    function kirim_kritik($post){
        //menampung post yang dikirim oleh controller untuk disimpan dalam array sesuai field dalam tabel
        $data=array(
        //'sesuai field tabel'=>'sesuai name input dalam form'
            'Email'=>$post['Email'],
            'Kritik_saran'=>$post['Kritik_saran'],
    );
    //menyimpan data ke tabel
    $this->db->insert('kritik_saran',$data);
    }
    function get_num_rows($table){
        $data=$this->db->get($table)->num_rows();
        return $data;
    }
    
}?>
