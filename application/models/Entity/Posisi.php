<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Posisi")
 */
class Posisi
{

    /**
	 * @Id
     * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
     */
    protected $id_posisi;

    /**
     * @Column(type="string", length=1024, nullable=false)
     */
    protected $nama_posisi;

	/**
     * @OneToMany(targetEntity="Lowongan", mappedBy="false")
     */
    protected $vacancies;
	
	public function getIdPosisi()
	{
		return $this->id_posisi;
	}
	
	public function getNamaPosisi()
	{
		return $this->nama_posisi;
	}
}
?>