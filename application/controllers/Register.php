<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {

	 private $vUsername='';
	 private $vNama='';
	 private $vEmail='';
	 private $vPassword1='';
	 private $vPassword2='';
	 private $vFirst='';
	 private $vLast='';
	 private $vJK='';
	 private $vLahir='';
	 private $vAddress='';
	 private $vPend='';
	 private $vPosisi='';
	 private $vDesc='';
	 private $vGaji='';
	 private $vLokasi='';
	 private $status = array("STATUS"=>"");
	 function __construct()
	 {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
		$this->load->library('session');
		
	}

	public function posisi(){
		$posisiRepository=$this->em->getRepository('Entity\Posisi');
		$lokasiRepository=$this->em->getRepository('Entity\Lokasi');
		$data['posisi']=$posisiRepository->findAll();
		$data['lokasi']=$lokasiRepository->findAll();
		$this->load->view('register',$data);
	}
	
	public function index()
	{
		$this->posisi();
		
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password2','Confirm Password','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('firstname','Nama Depan','required');
		$this->form_validation->set_rules('lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('pendidikan','Pendidikan','required');
		
		
		$this->vUsername=$this->input->post('username','true');
		$this->vEmail=$this->input->post('email','true');
		$this->vPassword1=$this->input->post('passwd','true');
		$this->vPassword2=$this->input->post('passwd2','true');
		
		$this->vFirst=$this->input->post('firstname','true');
		$this->vLast=$this->input->post('lastname','true');
		$this->vJK=$this->input->post('jk','true');
		$this->vLahir=$this->input->post('lahir','true');
		$this->vAddress=$this->input->post('address','true');
		$this->vPend=$this->input->post('pendidikan','true');
		$this->vPosisi=$this->input->post('posisi','true');
		$this->vDesc=$this->input->post('deskripsi','true');
		$this->vGaji=$this->input->post('gaji','true');
		$this->vLokasi=$this->input->post('lokasi','true');
		
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
			$this->status = array("STATUS"=>"Email tidak valid!");
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
	
	private function insertData(){
		$user = new Entity\Pelamar;
		$nama = $this->vFirst.$this->vLast;
		echo $nama;
		$user->setUsername($this->vUsername);
		$user->setPassword($this->vPassword1);
		$user->setEmail($this->vEmail);
		$user->setNama($nama);
		$user->setTglJoin();
		$user->setJenisKelamin($this->vJK);
		$user->setFoto("default.png");
		$user->setAlamat($this->vAddress);
		$user->setTglLahir($this->vLahir);
		$user->setPendTerakhir($this->vPend);
		$user->setPosisi($this->vPosisi);
		$user->setDeskripsi($this->vDesc);
		$user->setGaji($this->vGaji);
		$user->setLokasi($this->vLokasi);
		$this->em->persist($user);
		$this->em->flush();
		
	}
	
	private function cekUsername(){
		$userRepository=$this->em->getRepository('Entity\Pelamar');
		$singleUser=$userRepository->findOneBy(array('username'=>$this->vUsername));
		if($singleUser!=null){
			return false;
		}else{
			$this->status = array("STATUS"=>"Username sudah ada!");
			json_encode ($this->status) ;	
			return true;
		}
	}
	
}