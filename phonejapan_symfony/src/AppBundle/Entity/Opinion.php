<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opinion
 *
 * @ORM\Table(name="opinion", indexes={@ORM\Index(name="FK_OP_USU", columns={"COD_USU"}), @ORM\Index(name="FK_OP_PROD", columns={"COD_PROD"})})
 * @ORM\Entity
 */
class Opinion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="COD_OPINION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codOpinion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_OP", type="date", nullable=true)
     */
    private $fechaOp;

    /**
     * @var string
     *
     * @ORM\Column(name="MENSAJE", type="string", length=1000, nullable=true)
     */
    private $mensaje;

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
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="COD_USU", referencedColumnName="COD_USU")
     * })
     */
    private $codUsu;



    /**
     * Get codOpinion
     *
     * @return integer
     */
    public function getCodOpinion()
    {
        return $this->codOpinion;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     *
     * @return Opinion
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Opinion
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set codProd
     *
     * @param \AppBundle\Entity\Producto $codProd
     *
     * @return Opinion
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
     * Set codUsu
     *
     * @param \AppBundle\Entity\Usuario $codUsu
     *
     * @return Opinion
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
