<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Sektor")
 */
class Sektor
{

    /**
	 * @Id
     * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
     */
    protected $id_sektor;

    /**
     * @Column(type="string", length=1024, nullable=false)
     */
    protected $nama_sektor;

	/**
     * @OneToMany(targetEntity="Perusahaan", mappedBy="id_sektor")
     */
    protected $enterprises;
	
	public function getIdSektor(){
		return $this->id_sektor;
	}
	
	public function getNamaSektor(){
		return $this->nama_sektor;
	}
}
?>