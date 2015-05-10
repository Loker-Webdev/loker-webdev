<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Perusahaan")
 */
class Perusahaan
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
	 * @ManyToOne(targetEntity="Sektor")
     * @JoinColumn(name="id_sektor", referencedColumnName="id_sektor", nullable=false)
     */
    protected $id_sektor;
	
    /**
     * @Column(type="string", length=1024, nullable=false)
     */
    protected $nama_perusahaan;
	
    /**
     * @Column(type="string", length=1024, nullable=false)
     */
    protected $alamat;
	
    /**
     * @Column(type="string", length=50, nullable=true)
     */
    protected $telepon;
	
    /**
     * @Column(type="string", length=1024, nullable=true)
     */
    protected $website;
	
    /**
     * @Column(type="string", length=1024, nullable=true)
     */
    protected $email;
	
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
	
	public function getIdSektor()
	{
		return $this->id_sektor;
	}
	
	public function getNamaPerusahaan()
	{
		return $this->nama_perusahaan;
	}
	
	public function getAlamat()
	{
		return $this->alamat;
	}
	
	public function getTelepon()
	{
		return $this->telepon;
	}
	
	public function getWebsite()
	{
		return $this->website;
	}
	
	public function getEmail()
	{
		return $this->Email;
	}
?>