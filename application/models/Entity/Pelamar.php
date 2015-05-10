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
}
?>