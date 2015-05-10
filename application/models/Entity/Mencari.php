<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Mencari")
 */
class Mencari
{
    /**
	 * @Id
     * @ManyToOne(targetEntity="Lowongan")
     * @JoinColumn(name="id_lowongan", referencedColumnName="id_lowongan", nullable=false)
     */
    protected $id_lowongan;

    /**
	 * @Id
	 * @ManyToOne(targetEntity="Pelamar")
     * @JoinColumn(name="username", referencedColumnName="username", nullable=false)
     */
    protected $username;
	
	/**
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $skor;
	
	/**
     * @Column(type="date", nullable=false)
     */
    protected $tgl_cari;
	
}
?>