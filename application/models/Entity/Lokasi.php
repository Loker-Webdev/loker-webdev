<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Lokasi")
 */
class Lokasi
{

    /**
	 * @Id
     * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
     */
    protected $id_lokasi;

    /**
     * @Column(type="string", length=1024, nullable=false)
     */
    protected $nama_lokasi;
	
	/**
     * @Column(type="string", length=1024, nullable=false)
     */
    protected $provinsi;
	
	/**
     * @OneToMany(targetEntity="Lowongan", mappedBy="id_lokasi")
     */
    protected $vacancies;
	
	public function getIdLokasi()
	{
		return $this->id_lokasi;
	}
	
	public function getNamaLokasi()
	{
		return $this->nama_lokasi;
	}
	
	public function getProvinsi()
	{
		return $this->provinsi;
	}
}
?>