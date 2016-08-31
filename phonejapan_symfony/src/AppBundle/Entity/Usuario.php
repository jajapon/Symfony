<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="USERNAME", columns={"USERNAME"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="COD_USU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codUsu;

    /**
     * @var string
     *
     * @ORM\Column(name="USERNAME", type="string", length=60, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="USERPASS", type="string", length=60, nullable=true)
     */
    private $userpass;

    /**
     * @var string
     *
     * @ORM\Column(name="ROLE", type="string", length=20, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=30, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=500, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=80, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDOS", type="string", length=80, nullable=true)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="DNI", type="string", length=9, nullable=true)
     */
    private $dni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_NAC", type="date", nullable=true)
     */
    private $fechaNac;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="string", length=200, nullable=true)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="CP", type="integer", nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="CIUDAD", type="string", length=60, nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="PROVINCIA", type="string", length=60, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="PAIS", type="string", length=60, nullable=true)
     */
    private $pais;

    /**
     * @var integer
     *
     * @ORM\Column(name="TLF", type="integer", nullable=true)
     */
    private $tlf;

    /**
     * @var string
     *
     * @ORM\Column(name="THEME", type="string", length=200, nullable=true)
     */
    private $theme;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Producto", inversedBy="codUsu")
     * @ORM\JoinTable(name="Cesta",
     *   joinColumns={
     *     @ORM\JoinColumn(name="COD_USU", referencedColumnName="COD_USU")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="COD_PROD", referencedColumnName="COD_PROD")
     *   }
     * )
     */
    private $cesta;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codProd = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codUsu
     *
     * @return integer
     */
    public function getCodUsu()
    {
        return $this->codUsu;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set userpass
     *
     * @param string $userpass
     *
     * @return Usuario
     */
    public function setUserpass($userpass)
    {
        $this->userpass = $userpass;

        return $this;
    }

    /**
     * Get userpass
     *
     * @return string
     */
    public function getUserpass()
    {
        return $this->userpass;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Usuario
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Usuario
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Usuario
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set fechaNac
     *
     * @param \DateTime $fechaNac
     *
     * @return Usuario
     */
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    /**
     * Get fechaNac
     *
     * @return \DateTime
     */
    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Usuario
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
     * @return Usuario
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

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Usuario
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
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Usuario
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Usuario
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set tlf
     *
     * @param integer $tlf
     *
     * @return Usuario
     */
    public function setTlf($tlf)
    {
        $this->tlf = $tlf;

        return $this;
    }

    /**
     * Get tlf
     *
     * @return integer
     */
    public function getTlf()
    {
        return $this->tlf;
    }

    /**
     * Set theme
     *
     * @param string $theme
     *
     * @return Usuario
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Add codProd
     *
     * @param \AppBundle\Entity\Producto $codProd
     *
     * @return Usuario
     */
    public function addCodProd(\AppBundle\Entity\Producto $codProd)
    {
        $this->codProd[] = $codProd;

        return $this;
    }

    /**
     * Remove codProd
     *
     * @param \AppBundle\Entity\Producto $codProd
     */
    public function removeCodProd(\AppBundle\Entity\Producto $codProd)
    {
        $this->codProd->removeElement($codProd);
    }

    /**
     * Get codProd
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCodProd()
    {
        return $this->codProd;
    }
}
