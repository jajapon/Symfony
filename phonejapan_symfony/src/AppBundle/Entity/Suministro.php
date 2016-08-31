<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suministro
 *
 * @ORM\Table(name="suministro", indexes={@ORM\Index(name="FK_SUM_PROD", columns={"COD_PROD"}), @ORM\Index(name="FK_SUM_PROV", columns={"COD_PROV"})})
 * @ORM\Entity
 */
class Suministro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="COD_SUM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codSum;

    /**
     * @var integer
     *
     * @ORM\Column(name="CANTIDAD", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_SUM", type="date", nullable=false)
     */
    private $fechaSum;

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
     * @var \Proveedor
     *
     * @ORM\ManyToOne(targetEntity="Proveedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="COD_PROV", referencedColumnName="COD_PROV")
     * })
     */
    private $codProv;



    /**
     * Get codSum
     *
     * @return integer
     */
    public function getCodSum()
    {
        return $this->codSum;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Suministro
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set fechaSum
     *
     * @param \DateTime $fechaSum
     *
     * @return Suministro
     */
    public function setFechaSum($fechaSum)
    {
        $this->fechaSum = $fechaSum;

        return $this;
    }

    /**
     * Get fechaSum
     *
     * @return \DateTime
     */
    public function getFechaSum()
    {
        return $this->fechaSum;
    }

    /**
     * Set codProd
     *
     * @param \AppBundle\Entity\Producto $codProd
     *
     * @return Suministro
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

    /**
     * Set codProv
     *
     * @param \AppBundle\Entity\Proveedor $codProv
     *
     * @return Suministro
     */
    public function setCodProv(\AppBundle\Entity\Proveedor $codProv = null)
    {
        $this->codProv = $codProv;

        return $this;
    }

    /**
     * Get codProv
     *
     * @return \AppBundle\Entity\Proveedor
     */
    public function getCodProv()
    {
        return $this->codProv;
    }
}
