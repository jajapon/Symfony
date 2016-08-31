<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristicas
 *
 * @ORM\Table(name="caracteristicas", indexes={@ORM\Index(name="FK_CAR_PROD", columns={"COD_PROD"})})
 * @ORM\Entity
 */
class Caracteristicas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="COD_CARAC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codCarac;

    /**
     * @var string
     *
     * @ORM\Column(name="PANTALLA", type="string", length=60, nullable=true)
     */
    private $pantalla;

    /**
     * @var string
     *
     * @ORM\Column(name="RESOLUCION", type="string", length=60, nullable=true)
     */
    private $resolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="RAM", type="string", length=60, nullable=true)
     */
    private $ram;

    /**
     * @var string
     *
     * @ORM\Column(name="MINTERNA", type="string", length=60, nullable=true)
     */
    private $minterna;

    /**
     * @var string
     *
     * @ORM\Column(name="PROCESADOR", type="string", length=200, nullable=true)
     */
    private $procesador;

    /**
     * @var string
     *
     * @ORM\Column(name="SO", type="string", length=60, nullable=true)
     */
    private $so;

    /**
     * @var string
     *
     * @ORM\Column(name="FRONTAL", type="string", length=60, nullable=true)
     */
    private $frontal;

    /**
     * @var string
     *
     * @ORM\Column(name="TRASERA", type="string", length=60, nullable=true)
     */
    private $trasera;

    /**
     * @var string
     *
     * @ORM\Column(name="SIM", type="string", length=60, nullable=true)
     */
    private $sim;

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="COD_PROD", referencedColumnName="COD_PROD")
     * })
     */
    private $codProd;



    /**
     * Get codCarac
     *
     * @return integer
     */
    public function getCodCarac()
    {
        return $this->codCarac;
    }

    /**
     * Set pantalla
     *
     * @param string $pantalla
     *
     * @return Caracteristicas
     */
    public function setPantalla($pantalla)
    {
        $this->pantalla = $pantalla;

        return $this;
    }

    /**
     * Get pantalla
     *
     * @return string
     */
    public function getPantalla()
    {
        return $this->pantalla;
    }

    /**
     * Set resolucion
     *
     * @param string $resolucion
     *
     * @return Caracteristicas
     */
    public function setResolucion($resolucion)
    {
        $this->resolucion = $resolucion;

        return $this;
    }

    /**
     * Get resolucion
     *
     * @return string
     */
    public function getResolucion()
    {
        return $this->resolucion;
    }

    /**
     * Set ram
     *
     * @param string $ram
     *
     * @return Caracteristicas
     */
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get ram
     *
     * @return string
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set minterna
     *
     * @param string $minterna
     *
     * @return Caracteristicas
     */
    public function setMinterna($minterna)
    {
        $this->minterna = $minterna;

        return $this;
    }

    /**
     * Get minterna
     *
     * @return string
     */
    public function getMinterna()
    {
        return $this->minterna;
    }

    /**
     * Set procesador
     *
     * @param string $procesador
     *
     * @return Caracteristicas
     */
    public function setProcesador($procesador)
    {
        $this->procesador = $procesador;

        return $this;
    }

    /**
     * Get procesador
     *
     * @return string
     */
    public function getProcesador()
    {
        return $this->procesador;
    }

    /**
     * Set so
     *
     * @param string $so
     *
     * @return Caracteristicas
     */
    public function setSo($so)
    {
        $this->so = $so;

        return $this;
    }

    /**
     * Get so
     *
     * @return string
     */
    public function getSo()
    {
        return $this->so;
    }

    /**
     * Set frontal
     *
     * @param string $frontal
     *
     * @return Caracteristicas
     */
    public function setFrontal($frontal)
    {
        $this->frontal = $frontal;

        return $this;
    }

    /**
     * Get frontal
     *
     * @return string
     */
    public function getFrontal()
    {
        return $this->frontal;
    }

    /**
     * Set trasera
     *
     * @param string $trasera
     *
     * @return Caracteristicas
     */
    public function setTrasera($trasera)
    {
        $this->trasera = $trasera;

        return $this;
    }

    /**
     * Get trasera
     *
     * @return string
     */
    public function getTrasera()
    {
        return $this->trasera;
    }

    /**
     * Set sim
     *
     * @param string $sim
     *
     * @return Caracteristicas
     */
    public function setSim($sim)
    {
        $this->sim = $sim;

        return $this;
    }

    /**
     * Get sim
     *
     * @return string
     */
    public function getSim()
    {
        return $this->sim;
    }

    /**
     * Set codProd
     *
     * @param \AppBundle\Entity\Producto $codProd
     *
     * @return Caracteristicas
     */
    public function setCodProd(\AppBundle\Entity\Producto $codProd = null)
    {
        $this->codProd = $codProd;

        return $this;
    }

    /**
     * Get codProd
     *
     * @return \AppBundle\Entity\Producto
     */
    public function getCodProd()
    {
        return $this->codProd;
    }
}
