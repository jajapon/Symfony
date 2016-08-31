<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lineadepedido
 *
 * @ORM\Table(name="lineadepedido", indexes={@ORM\Index(name="FK_PED_LP", columns={"COD_PEDIDO"}), @ORM\Index(name="FK_PED_P", columns={"COD_PROD"})})
 * @ORM\Entity
 */
class Lineadepedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="COD_LINEA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codLinea;

    /**
     * @var integer
     *
     * @ORM\Column(name="CANTIDAD", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var \Pedido
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Pedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="COD_PEDIDO", referencedColumnName="COD_PEDIDO")
     * })
     */
    private $codPedido;

    /**
     * @var \Producto
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="COD_PROD", referencedColumnName="COD_PROD")
     * })
     */
    private $codProd;



    /**
     * Set codLinea
     *
     * @param integer $codLinea
     *
     * @return Lineadepedido
     */
    public function setCodLinea($codLinea)
    {
        $this->codLinea = $codLinea;

        return $this;
    }

    /**
     * Get codLinea
     *
     * @return integer
     */
    public function getCodLinea()
    {
        return $this->codLinea;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Lineadepedido
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
     * Set codPedido
     *
     * @param \AppBundle\Entity\Pedido $codPedido
     *
     * @return Lineadepedido
     */
    public function setCodPedido(\AppBundle\Entity\Pedido $codPedido)
    {
        $this->codPedido = $codPedido;

        return $this;
    }

    /**
     * Get codPedido
     *
     * @return \AppBundle\Entity\Pedido
     */
    public function getCodPedido()
    {
        return $this->codPedido;
    }

    /**
     * Set codProd
     *
     * @param \AppBundle\Entity\Producto $codProd
     *
     * @return Lineadepedido
     */
    public function setCodProd(\AppBundle\Entity\Producto $codProd)
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
