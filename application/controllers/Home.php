<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Public_Model');
	}

	public function index(){
	    $content['berita'] = $this->Public_Model->ListBerita();
	    $content['test'] = "background-color: #56947f";
	    $content['putih'] = "color: aliceblue;";
	    $head['page'] = "Sistem Informasi";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/spinner');
		$this->load->view('pages/navbar');
		$this->load->view('tegur');
		$this->load->view('berita', $content);
		$this->load->view('List_Keuangan');
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}

	public function profil(){
	    $head['page'] = "Profil";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/spinner');
		$this->load->view('pages/navbar');
		$this->load->view('profil');
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	
	public function organisasi(){
		$head['page'] = "Organisasi";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('organisasi');
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}

	public function visimisi(){
		$head['page'] = "Visi & Misi";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('visimisi');
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function berita(){
	    $content['berita'] = $this->Public_Model->ListBerita();
		$head['page'] = "Berita";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('berita', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function kesehatan(){
	    $content['berita'] = $this->Public_Model->ListKesehatan();
		$head['page'] = "Kesehatan";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('berita', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function pkk(){
	    $content['berita'] = $this->Public_Model->ListPKK();
		$head['page'] = "PKK";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('berita', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function pemuda(){
	    $content['berita'] = $this->Public_Model->ListPemuda();
		$head['page'] = "Pemuda";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('berita', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function pembangunan(){
	    $content['berita'] = $this->Public_Model->ListPembangunan();
		$head['page'] = "Pembangunan";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('berita', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function kegiatanlain(){
	    $content['berita'] = $this->Public_Model->ListKegiatanLain();
		$head['page'] = "Kegiatan Lain";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('berita', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function RPJM(){
	    $content['keuangan'] = $this->Public_Model->ListRPJM();
	    $content['jenis'] = "Rencana Pembangunan Jangka Menengah (RPJM)";
		$head['page'] = "RPJM";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('keuangan', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function RKP(){
	    $content['keuangan'] = $this->Public_Model->ListRKP();
	    $content['jenis'] = "Rencana Kerja Pemerintah (RKP)";
		$head['page'] = "RKP";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('keuangan', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function APBD(){
	    $content['keuangan'] = $this->Public_Model->ListAPBD();
	    $content['jenis'] = "Anggaran Pendapatan dan Belanja Desa (APBDes)";
		$head['page'] = "APBDes";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('keuangan', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function LRA(){
	    $content['keuangan'] = $this->Public_Model->ListLRA();
	    $content['jenis'] = "Laporan Realisasi Anggaran";
		$head['page'] = "LRA";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('keuangan', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	public function kegiatan(){
		$head['page'] = "Kegiatan";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('kegiatan');
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	
	public function artikel($id){
	    $content['artikel'] = $this->Public_Model->getArtikel($id);
	    $head['page'] = "Artikel";
		$this->load->view('pages/head', $head);
		$this->load->view('pages/navbar');
		$this->load->view('artikel', $content);
		$this->load->view('pages/footer');
		$this->load->view('pages/jawa');
	}
	
}