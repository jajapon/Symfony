<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 */
class Producto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="COD_PROD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codProd;

    /**
     * @var string
     *
     * @ORM\Column(name="MARCA", type="string", length=50, nullable=true)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="MODELO", type="string", length=50, nullable=true)
     */
    private $modelo;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOCK", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGEN", type="string", length=1000, nullable=true)
     */
    private $imagen;

    /**
     * @var float
     *
     * @ORM\Column(name="PRECIO_UNI", type="float", precision=11, scale=2, nullable=true)
     */
    private $precioUni;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Usuario", mappedBy="cesta")
     */
    private $codUsu;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codUsu = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codProd
     *
     * @return integer
     */
    public function getCodProd()
    {
        return $this->codProd;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return Producto
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Producto
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Producto
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Producto
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set precioUni
     *
     * @param float $precioUni
     *
     * @return Producto
     */
    public function setPrecioUni($precioUni)
    {
        $this->precioUni = $precioUni;

        return $this;
    }

    /**
     * Get precioUni
     *
     * @return float
     */
    public function getPrecioUni()
    {
        return $this->precioUni;
    }

    /**
     * Add codUsu
     *
     * @param \AppBundle\Entity\Usuario $codUsu
     *
     * @return Producto
     */
    public function addCodUsu(\AppBundle\Entity\Usuario $codUsu)
    {
        $this->codUsu[] = $codUsu;

        return $this;
    }

    /**
     * Remove codUsu
     *
     * @param \AppBundle\Entity\Usuario $codUsu
     */
    public function removeCodUsu(\AppBundle\Entity\Usuario $codUsu)
    {
        $this->codUsu->removeElement($codUsu);
    }

    /**
     * Get codUsu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCodUsu()
    {
        return $this->codUsu;
    }
}
