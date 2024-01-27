<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Model extends CI_Model {
    
    public function userLogin($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user')->result_array();
    }
    
    public function SimpanKeuangan($input){
        $this->db->insert('keuangan', $input);
    }
    
    public function EditKeuangan($input){
        $this->db->where('id_keuangan', $input['id_keuangan']);
        $this->db->update('keuangan', $input);
    }
    
    public function HapusKeuangan($input){
        $this->db->where('id_keuangan', $input);
        $this->db->delete('keuangan');
    }
    
    public function SimpanArtikel($input){
        $this->db->set('tanggal', 'now()', FALSE);
        $this->db->insert('berita', $input);
    }
    
    public function EditArtikel($input){
        $this->db->set('tanggal', 'now()', FALSE);
        $this->db->where('id_berita', $input['id_berita']);
        $this->db->update('berita', $input);
    }
    
    public function HapusArtikel($input){
        $this->db->where('id_berita', $input);
        $this->db->delete('berita');
    }

    function getEnum( $table , $field ){
        $query = " SHOW COLUMNS FROM `$table` LIKE '$field' ";
        $row = $this->db->query(" SHOW COLUMNS FROM `$table` LIKE '$field' ")->row()->Type;
        $regex = "/'(.*?)'/";
        preg_match_all( $regex , $row, $enum_array );
        $enum_fields = $enum_array[1];
        return( $enum_fields );
    }
    
    public function ListBerita(){
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get('berita')->result_array();
    }
    
    public function ListKeuangan(){
        $this->db->order_by('tahun', 'desc');
        return $this->db->get('keuangan')->result_array();
    }
    
     public function ListKesehatan(){
        return $this->getListByTypeKegiatan('kesehatan');
    }
    
     public function ListPKK(){
        return $this->getListByTypeKegiatan('pkk');
    }
    
     public function ListPembangunan(){
        return $this->getListByTypeKegiatan('pembangunan');
    }

    public function ListPemuda(){
        return $this->getListByTypeKegiatan('pemuda');
    }
    
     public function ListKegiatanLain(){
        return $this->getListByTypeKegiatan('kegiatan lain');
    }

    public function ListRKP(){
        return $this->getListByTypeKeuangan('Rencana Kerja Pemerintah');
    }

    public function ListAPBD(){
        return $this->getListByTypeKeuangan('Anggaran Pendapatan dan Belanja Desa');
    }

    public function ListLRA(){
        return $this->getListByTypeKeuangan('Laporan Realisasi Anggaran');
    }

    public function getArtikel($id){
        $this->db->where('id_berita', $id);
        return $this->db->get('berita')->result_array();
    }
    
    public function getKeuangan($id){
        $this->db->where('id_keuangan', $id);
        return $this->db->get('keuangan')->result_array();
    }
    
    private function getListByTypeKeuangan($type){
        $this->db->where('jenis_keuangan', $type);
        $this->db->order_by('tahun', 'desc');
        return $this->db->get('keuangan')->result_array();
    }
    
    private function getListByTypeKegiatan($type){
        $this->db->where('jenis_kegiatan', $type);
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get('berita')->result_array();
    }
}
