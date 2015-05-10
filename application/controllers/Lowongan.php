<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lowongan extends CI_Controller {

	private $vId_lowongan='';
	private $vId_kategori='';
	private $vId_lokasi='';
	private $vId_posisi='';
	private $vUsername='';
	private $vTgl_posting='';
	private $vJudul='';
	private $vTgl_kadaluarsa='';
	private $vJam_kerja='';
	private $vGaji='';
	private $vPend_terakhir='';
	private $vUmur_min='';
	private $vUmur_max='';
	private $vJenis_kelamin='';
	private $vPosisi_terakhir='';
	private $vDeskripsi='';
	//private $status = array("STATUS"=>"");

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('addLowongan_view');
		$this->form_validation->set_rules('register_username','Nama','required');
		$this->form_validation->set_rules('password2','Confirm Password','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		
		
		$this->vUsername=$this->input->post('register_username','true');
		$this->vPassword1=$this->input->post('password1','true');
		$this->vNama=$this->input->post('register_nama','true');
		$this->vPassword2=$this->input->post('password2','true');
		$this->vEmail=$this->input->post('email','true');
		
		if($this->form_validation->run()){
			if($this->cekUsername()){
				if($this->cekPassword()){
					$this->insertData();
					redirect(site_url('home'));
				}
			}
		}			
	}

	private function cekEmail(){
		if($this->form_validation->valid_email($this->vEmail)){
			return true;
		}else{
			$this->status = array("STATUS"=>"Email Tidak Sama");
			json_encode ($this->status) ;
			return false;
		}
	}

	private function cekPassword(){
		if($this->vPassword1==$this->vPassword2){
			return true;
		}else{
			$this->status = array("STATUS"=>"Password Tidak Sama");
			json_encode ($this->status) ;
			return false;			
		}
	}

	private function cekUsername(){
		$userRepository=$this->em->getRepository('Entity\User');
		$singleUser=$userRepository->findOneBy(array('username'=>$this->vUsername));
		if($singleUser!=null){
			return false;
		}else{
			$this->status = array("STATUS"=>"Username Sudah Ada");
			json_encode ($this->status) ;	
			return true;
		}
	}

	private function insertData(){
		$lowongan = new Entity\Lowongan;
		$lowongan->setId_lowongan($this->vId_lowongan);
		$lowongan->setId_kategori($this->vId_kategori);
		$lowongan->setId_lokasi($this->vId_lokasi);
		$lowongan->setId_posisi($this->vId_posisi);
		$lowongan->setUsername($this->vUsername);
		$lowongan->setTgl_posting($this->vTgl_posting);
		$lowongan->setJudul($this->vJudul);
		$lowongan->setTgl_kadaluarsa($this->vTgl_kadaluarsa);
		$lowongan->setJam_kerja($this->vJam_kerja);
		$lowongan->setGaji($this->vGaji);
		$lowongan->setPend_terakhir($this->vPend_terakhir);
		$lowongan->setUmur_min($this->vUmur_min);
		$lowongan->setUmur_max($this->vUmur_max);
		$lowongan->setJenis_kelamin($this->vJenis_kelamin);
		$lowongan->setPosisi_terakhir($this->vPosisi_terakhir);
		$lowongan->setDeskripsi($this->vDeskripsi);
		$this->em->persist($lowongan);
		$this->em->flush();		
	}	
}