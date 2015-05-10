<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Lowongan")
 */
class Lowongan
{

    /**
	 * @Id
     * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
     */
    protected $id_lowongan;

    /**
	 * @ManyToOne(targetEntity="Kategori")
     * @JoinColumn(name="id_kategori", referencedColumnName="id_kategori", nullable=false)
     */
    protected $id_kategori;
	
	/**
	 * @ManyToOne(targetEntity="Lokasi")
     * @JoinColumn(name="id_lokasi", referencedColumnName="id_lokasi", nullable=false)
     */
    protected $id_lokasi;

	/**
	 * @ManyToOne(targetEntity="Posisi")
     * @JoinColumn(name="id_posisi", referencedColumnName="id_posisi", nullable=false)
     */
    protected $id_posisi;
	
	/**
	 * @ManyToOne(targetEntity="Perusahaan")
     * @JoinColumn(name="username", referencedColumnName="username", nullable=false)
     */
    protected $username;
	
	/**
     * @Column(type="date", nullable=false)
     */
    protected $tgl_posting;
	
	/**
     * @Column(type="string", length=1024, nullable=true)
     */
    protected $judul;
	
	/**
     * @Column(type="date", nullable=false)
     */
    protected $tgl_kadaluarsa;
	
	/**
     * @Column(type="float", nullable=true)
     */
    protected $jam_kerja;
	
	/**
     * @Column(type="float", nullable=true)
     */
    protected $gaji;

	/**
     * @Column(type="string", length=1024, nullable=true)
     */
    protected $pend_terakhir;
	
	/**
     * @Column(type="integer", nullable=true)
     */
    protected $umur_min;
	
	/**
     * @Column(type="integer", nullable=true)
     */
    protected $umur_max;
	
    /**
     * @Column(type="string", length=20, nullable=false)
     */
    protected $jenis_kelamin;
	
	/**
     * @Column(type="string", length=1024, nullable=true)
     */
    protected $deskripsi;
	
	/**
     * @OneToMany(targetEntity="Mencari", mappedBy="id_lowongan")
     */
    protected $searchings;
	
	public function getIdLowongan()
	{
		return $this->id_lowongan;
	}
	
	public function getIdKategori()
	{
		return $this->id_kategori;
	}
	
	public function getIdLokasi()
	{
		return $this->id_lokasi;
	}
	
	public function getIdPosisi()
	{
		return $this->id_posisi;
	}
	
	public function getUsername()
	{
		return $this->username;
	}
	
	public function getTglPosting()
	{
		return $this->tgl_posting;
	}
	
	public function getTglKadaluarsa()
	{
		return $this->tgl_kadaluarsa;
	}
	
	public function getJamKerja()
	{
		return $this->jam_kerja;
	}
	
	public function getGaji()
	{
		return $this->Gaji;
	}
	
	public function getPendTerakhir()
	{
		return $this->pend_terakhir;
	}
	
	public function getUmurMin()
	{
		return $this->umur_min;
	}
	
	public function getUmurMax()
	{
		return $this->umur_max;
	}
	
	public function getJenisKelamin()
	{
		return $this->jenis_kelamin;
	}
	
	public function getPosisiTerakhir()
	{
		return $this->posisi_terakhir;
	}
	
	public function getDeskripsi()
	{
		return $this->Deskripsi;
	}
}
?>