<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Kategori")
 */
class Kategori
{

    /**
	 * @Id
     * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
     */
    protected $id_kategori;

    /**
     * @Column(type="string", length=1024, nullable=false)
     */
    protected $nama_kategori;
	
	/**
     * @OneToMany(targetEntity="Lowongan", mappedBy="id_kategori")
     */
    protected $vacancies;
	
	public function getIdKategori()
	{
		return $this->id_kategori;
	}
	
	public function getNamaKategori()
	{
		return $this->nama_kategori;
	}
}
?>