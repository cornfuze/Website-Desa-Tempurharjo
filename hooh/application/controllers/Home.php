<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Public_Model');
	}
	
	public function login(){
	    if(isset($_SESSION['login']) and $_SESSION['login']){
	        redirect(base_url('home'));
	    }
	    $this->load->view('head');
	    $this->load->view('login-v2');
	}
	
	public function validateuser($username, $password){
        header('Content-Type: application/json');
        if($this->Public_Model->userLogin($username, $password)){
            $data = TRUE;
            $this->session->set_userdata('login', $data);
        } else{
            $data = FALSE;
        }
        echo json_encode($data);
    }
    
    private function statuslogin(){
        if (!isset($_SESSION['login']) or !$_SESSION['login']){
            redirect(base_url('home/login'));
        }
    }
    
    public function logout(){
        unset($_SESSION['login']);
        redirect(base_url('home/login'));
    }
	
	public function index(){
	    $this->statuslogin();
	    $content['jumlahBerita'] = count($this->Public_Model->ListBerita());
	    $content['jumlahKeuangan'] = count($this->Public_Model->ListKeuangan());
	    $this->load->view('head');
	    $this->load->view('starter', $content);
	}
	
	public function admkegiatan(){
	    $this->statuslogin();
	    $content['kegiatan'] = $this->Public_Model->ListBerita();
	    $content['jenis_kegiatan'] = $this->Public_Model->getEnum('berita', 'jenis_kegiatan');
	    $content['urlimg'] = "https://tempurharjo.com/";
	    $this->load->view('head');
	    $this->load->view('adm-kegiatan', $content);
	}
	
	public function admkeuangan(){
	    $this->statuslogin();
	    $content['kegiatan'] = $this->Public_Model->ListKeuangan();
	    $content['jenis_kegiatan'] = $this->Public_Model->getEnum('keuangan', 'jenis_keuangan');
	    $content['urlimg'] = "https://tempurharjo.com/";
	    $this->load->view('head');
	    $this->load->view('adm-keuangan', $content);
	}
	
	public function hapusartikel($id){
	    $this->statuslogin();
        unlink("../".$this->Public_Model->getArtikel($id)[0]['gambar']);
        $this->Public_Model->HapusArtikel($id);
	}
	
	public function hapuskeuangan($id){
	    $this->statuslogin();
        unlink("../".$this->Public_Model->getKeuangan($id)[0]['link']);
        $this->Public_Model->HapusKeuangan($id);
	}
	public function simpanartikel($jenis) {
	    $this->statuslogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Define the upload directory
            $uploadDir = "../asset/img/artikel/";
            
            // Get the file information
            $fileName = $_FILES['gambar']['name'];
            $fileTmpName = $_FILES['gambar']['tmp_name'];
            
            // Generate a unique filename to avoid overwriting existing files
            $uniqueFileName = uniqid() . '_' . $fileName;
            
            move_uploaded_file($fileTmpName, $uploadDir . $uniqueFileName);
            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $uploadDir . $uniqueFileName;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 1280;
            $config['height']       = 720;
            
            $this->load->library('image_lib', $config);
            
            $this->image_lib->resize();
            // $image = imagecreatefromjpeg($fileTmpName);
            
            // imagewebp($image, $uploadDir . $uniqueFileName);
            
            // Store the file path in the database
            $filePath = 'asset/img/artikel/' . $uniqueFileName;
            
            $data = json_decode($_POST['isiartikel'], true);

            // Ambil konten artikel
            $isiartikel = $data['content'];
            
            if($jenis === 'Edit'){
                if($_FILES['gambar']){
                    $input = array(
                    'id_berita' => $_POST['id_berita'],
                    'keterangan' => $_POST['keterangan'],
                    'jenis_kegiatan' => $_POST['jenis'],
                    'gambar' => $filePath,
                    'isiartikel' => $isiartikel,
                    );
                }else if(!$_FILES['gambar']){
                    $input = array(
                    'id_berita' => $_POST['id_berita'],
                    'keterangan' => $_POST['keterangan'],
                    'jenis_kegiatan' => $_POST['jenis'],
                    'isiartikel' => $isiartikel,
                    );
                }
            }else if($jenis === 'Add'){
                $input = array(
                'keterangan' => $_POST['keterangan'],
                'jenis_kegiatan' => $_POST['jenis'],
                'gambar' => $filePath,
                'isiartikel' => $isiartikel,
                );
            }
            
            // Simpan artikel ke database
            if($jenis === "Add"){
                $this->Public_Model->SimpanArtikel($input);
            } else if($jenis === "Edit"){
                $this->Public_Model->EditArtikel($input);
            }
            // header("location: $base_url('home/admkegiatan')");

        }
    }
    
	public function simpankeuangan($jenis) {
	    $this->statuslogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Define the upload directory
            $uploadDir = "../asset/file/";
            
            // Get the file information
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            
            // Generate a unique filename to avoid overwriting existing files
            $uniqueFileName = uniqid() . '_' . $fileName;
            
            move_uploaded_file($fileTmpName, $uploadDir . $uniqueFileName);
            
            $filePath = 'asset/file/' . $uniqueFileName;
            
            if($jenis === 'Edit'){
                if($_FILES['file']){
                    unlink("../".$_POST['tmppdfsrc']);
                    $input = array(
                    'id_keuangan' => $_POST['id_keuangan'],
                    'jenis_keuangan' => $_POST['jenis_keuangan'],
                    'tahun' => $_POST['tahun'],
                    'link' => $filePath,
                    );
                }else if(!$_FILES['file']){
                    $input = array(
                    'id_keuangan' => $_POST['id_keuangan'],
                    'jenis_keuangan' => $_POST['jenis_keuangan'],
                    'tahun' => $_POST['tahun'],
                    );
                }
            }else if($jenis === 'Add'){
                $input = array(
                'jenis_keuangan' => $_POST['jenis_keuangan'],
                'tahun' => $_POST['tahun'],
                'link' => $filePath,
                );
            }
            
            // Simpan artikel ke database
            if($jenis === "Add"){
                $this->Public_Model->SimpanKeuangan($input);
            } else if($jenis === "Edit"){
                $this->Public_Model->EditKeuangan($input);
            }

        }
    }
    
    public function getdataedit($id, $type){
        $this->statuslogin();
        header('Content-Type: application/json');
        foreach($this->Public_Model->$type($id) as $a):
            $tasks[] = $a;
        endforeach;
        echo json_encode($tasks);
    }
    
}