<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido", indexes={@ORM\Index(name="FK_PED_USU", columns={"COD_USU"})})
 * @ORM\Entity
 */
class Pedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="COD_PEDIDO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codPedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_PED", type="date", nullable=true)
     */
    private $fechaPed;

    /**
     * @var float
     *
     * @ORM\Column(name="IMPORTE", type="float", precision=11, scale=2, nullable=true)
     */
    private $importe;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="COD_USU", referencedColumnName="COD_USU")
     * })
     */
    private $codUsu;



    /**
     * Get codPedido
     *
     * @return integer
     */
    public function getCodPedido()
    {
        return $this->codPedido;
    }

    /**
     * Set fechaPed
     *
     * @param \DateTime $fechaPed
     *
     * @return Pedido
     */
    public function setFechaPed($fechaPed)
    {
        $this->fechaPed = $fechaPed;

        return $this;
    }

    /**
     * Get fechaPed
     *
     * @return \DateTime
     */
    public function getFechaPed()
    {
        return $this->fechaPed;
    }

    /**
     * Set importe
     *
     * @param float $importe
     *
     * @return Pedido
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return float
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set codUsu
     *
     * @param \AppBundle\Entity\Usuario $codUsu
     *
     * @return Pedido
     */
    public function setCodUsu(\AppBundle\Entity\Usuario $codUsu = null)
    {
        $this->codUsu = $codUsu;

        return $this;
    }

    /**
     * Get codUsu
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getCodUsu()
    {
        return $this->codUsu;
    }
}
