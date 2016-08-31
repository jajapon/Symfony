<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedor
 *
 * @ORM\Table(name="proveedor")
 * @ORM\Entity
 */
class Proveedor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="COD_PROV", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codProv;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=40, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="CIUDAD", type="string", length=40, nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="string", length=40, nullable=true)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="CP", type="integer", nullable=true)
     */
    private $cp;



    /**
     * Get codProv
     *
     * @return integer
     */
    public function getCodProv()
    {
        return $this->codProv;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Proveedor
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
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Proveedor
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Proveedor
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Proveedor
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }
}
