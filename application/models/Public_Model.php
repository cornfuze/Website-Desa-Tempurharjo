<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Model extends CI_Model {
    
    public function SimpanArtikel($isiartikel){
        $this->db->set('isiartikel', $isiartikel);
        $this->db->where('id_berita', 1);
        $this->db->update('berita');
    }

    public function ListBerita(){
        $this->db->order_by('tanggal', 'desc');
        $this->db->limit(6);
        return $this->db->get('berita')->result_array();
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

    public function ListRPJM(){
        return $this->getListByTypeKeuangan('Rencana Pembangunan Jangka Menengah');
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
