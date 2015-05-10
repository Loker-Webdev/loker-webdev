<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Pelamar")
 */
class Pelamar
{

    /**
	 * @Id
     * @Column(type="string", length=100, nullable=false)
     */
    protected $username;

    /**
     * @Column(type="string", length=255, nullable=false)
     */
    protected $password;
	
	/**
     * @Column(type="string", length=255, nullable=false)
     */
    protected $nama;
	
	/**
     * @Column(type="date", nullable=false)
     */
    protected $tgl_join;
	
	/**
     * @Column(type="string", length=20, nullable=false)
     */
    protected $jenis_kelamin;
	
    /**
     * @Column(type="string", length=500, nullable=true)
     */
    protected $foto;
	
    /**
     * @Column(type="string", length=1024, nullable=true)
     */
    protected $alamat;
	
    /**
     * @Column(type="string", length=1024, nullable=true)
     */
    protected $email;
	
    /**
     * @Column(type="date", nullable=false)
     */
    protected $tgl_lahir;	

    /**
     * @Column(type="string", length=1024, nullable=false)
     */
    protected $pend_terakhir;
	
    /**
     * @Column(type="string", length=1024, nullable=true)
     */
    protected $posisi;
	
    /**
     * @Column(type="string", length=1024, nullable=true)
     */
    protected $deskripsi;
	
	/**
     * @Column(type="string", length=1024, nullable=true)
     */
    protected $pref_gaji;
	
	/**
	 * @ManyToOne(targetEntity="Lokasi")
     * @JoinColumn(name="id_lokasi", referencedColumnName="id_lokasi", nullable=false)
     */
    protected $id_lokasi;
	
	/**
     * @OneToMany(targetEntity="Mencari", mappedBy="username")
     */
    protected $searchings;
	
	public function getUsername()
	{
		return $this->username;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function getNama()
	{
		return $this->nama;
	}
	
	public function getTglJoin()
	{
		return $this->tgl_join;
	}
	
	public function getJenisKelamin()
	{
		return $this->jenis_kelamin;
	}
	
	public function getFoto()
	{
		return $this->foto;
	}
	
	public function getAlamat()
	{
		return $this->alamat;
	}
		
	public function getEmail()
	{
		return $this->email;
	}
	
	public function getTglLahir()
	{
		return $this->tgl_lahir;
	}
	
	public function getPendTerakhir()
	{
		return $this->pend_terakhir;
	}
	
	public function getPosisi()
	{
		return $this->posisi;
	}
	
	public function getDeskripsi()
	{
		return $this->deskripsi;
	}

	public function getGaji()
	{
		return $this->pref_gaji;
	}
	
	public function getLokasi()
	{
		return $this->id_lokasi;
	}
	
	public function setUsername($username)
	{
		$this->username=$username;
	}
	
	public function setPassword($passwd)
	{
		$this->password=$passwd;
	}
	
	public function setNama($name)
	{
		$this->nama=$name;
	}
	
	public function setTglJoin()
	{
		$date = date("Y/m/d");
		$this->tgl_join=$date;
	}
	
	public function setJenisKelamin($JK)
	{
		$this->jenis_kelamin=$JK;
	}
	
	public function setFoto($file)
	{
		$this->foto=$file;
	}
	
	public function setAlamat($address)
	{
		$this->alamat=$address;
	}
		
	public function setEmail($email)
	{
		$this->email=$email;
	}
	
	public function setTglLahir($lahir)
	{
		$this->tgl_lahir=$lahir;
	}
	
	public function setPendTerakhir($pend)
	{
		$this->pend_terakhir=$pend;
	}
	
	public function setPosisi($posisi)
	{
		$this->posisi=$posisi;
	}
	
	public function setDeskripsi($desc)
	{
		$this->deskripsi=$desc;
	}
	
	public function setGaji($gaji)
	{
		$this->pref_gaji=$gaji;
	}
	
	public function getLokasi()
	{
		$this->id_lokasi=$lokasi;
	}
}
?>