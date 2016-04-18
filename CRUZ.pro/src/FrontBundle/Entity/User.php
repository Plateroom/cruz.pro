<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=255)
     */
    private $cognome;

    /**
     * @var string
     *
     * @ORM\Column(name="immagine_url", type="text")
     */
    private $immagineUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_di_nascita", type="datetime", unique=true)
     */
    private $dataDiNascita;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="social", type="string", length=255, nullable=true)
     */
    private $social;


    /**
     * @ORM\OneToMany(targetEntity="Evento", mappedBy="user")
     */
    private $eventoUser;

    public function __construct()
    {
        parent::__construct();

        $this->eventoUser = new ArrayCollection();
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Utenti
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return Utenti
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set immagineUrl
     *
     * @param string $immagineUrl
     *
     * @return Utenti
     */
    public function setImmagineUrl($immagineUrl)
    {
        $this->immagineUrl = $immagineUrl;

        return $this;
    }

    /**
     * Get immagineUrl
     *
     * @return string
     */
    public function getImmagineUrl()
    {
        return $this->immagineUrl;
    }

    /**
     * Set dataDiNascita
     *
     * @param \DateTime $dataDiNascita
     *
     * @return Utenti
     */
    public function setDataDiNascita($dataDiNascita)
    {
        $this->dataDiNascita = $dataDiNascita;

        return $this;
    }

    /**
     * Get dataDiNascita
     *
     * @return \DateTime
     */
    public function getDataDiNascita()
    {
        return $this->dataDiNascita;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Utenti
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
     * Set social
     *
     * @param string $social
     *
     * @return Utenti
     */
    public function setSocial($social)
    {
        $this->social = $social;

        return $this;
    }

    /**
     * Get social
     *
     * @return string
     */
    public function getSocial()
    {
        return $this->social;
    }


//////////////
    public function setEventoUser($eventoUser)
    {
        $this->eventoUser = $eventoUser;

        return $this;
    }


    public function getEventoUser()
    {
        return $this->eventoUser;
    }
}

