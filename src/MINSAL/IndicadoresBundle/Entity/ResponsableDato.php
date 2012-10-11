<?php

namespace MINSAL\IndicadoresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MINSAL\IndicadoresBundle\Entity\ResponsableDato
 *
 * @ORM\Table(name="responsable_dato")
 * @ORM\Entity
 */
class ResponsableDato
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="responsable_dato_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string $establecimiento
     *
     * @ORM\Column(name="establecimiento", type="string", length=100, nullable=false)
     */
    private $establecimiento;

    /**
     * @var string $contacto
     *
     * @ORM\Column(name="contacto", type="string", length=100, nullable=false)
     */
    private $contacto;

    /**
     * @var string $correo
     *
     * @ORM\Column(name="correo", type="string", length=50, nullable=false)
     */
    private $correo;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=false)
     */
    private $telefono;

    /**
     * @var string $cargo
     *
     * @ORM\Column(name="cargo", type="string", length=50, nullable=false)
     */
    private $cargo;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set establecimiento
     *
     * @param string $establecimiento
     * @return ResponsableDato
     */
    public function setEstablecimiento($establecimiento)
    {
        $this->establecimiento = $establecimiento;
    
        return $this;
    }

    /**
     * Get establecimiento
     *
     * @return string 
     */
    public function getEstablecimiento()
    {
        return $this->establecimiento;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     * @return ResponsableDato
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;
    
        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return ResponsableDato
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    
        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return ResponsableDato
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return ResponsableDato
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }
}