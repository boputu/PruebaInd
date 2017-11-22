<?php

namespace EsqueletoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventos
 *
 * @ORM\Table(name="eventos")
 * @ORM\Entity(repositoryClass="EsqueletoBundle\Repository\EventosRepository")
 */
class Eventos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=255)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasenya", type="string", length=255)
     */
    private $contrasenya;

    /**
     * @var string
     *
     * @ORM\Column(name="ranking", type="string", length=255)
     */
    private $ranking;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", length=255)
     */
    private $level;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Eventos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Eventos
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set contrasenya
     *
     * @param string $contrasenya
     *
     * @return Eventos
     */
    public function setContrasenya($contrasenya)
    {
        $this->contrasenya = $contrasenya;

        return $this;
    }

    /**
     * Get contrasenya
     *
     * @return string
     */
    public function getContrasenya()
    {
        return $this->contrasenya;
    }

    /**
     * Set ranking
     *
     * @param string $ranking
     *
     * @return Eventos
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;

        return $this;
    }

    /**
     * Get ranking
     *
     * @return string
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Eventos
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }
}
