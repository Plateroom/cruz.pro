<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utenti
 *
 * @ORM\Table(name="utenti")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\UtentiRepository")
 */
class Utenti
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", length=255)
     */
    private $admin;

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
     * @ORM\Column(name="ruolo", type="string", length=255)
     */
    private $ruolo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_registrazione", type="datetime", unique=true)
     */
    private $dataRegistrazione;

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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="social", type="string", length=255, nullable=true)
     */
    private $social;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set admin
     *
     * @param string $admin
     *
     * @return Utenti
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return string
     */
    public function getAdmin()
    {
        return $this->admin;
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
     * Set ruolo
     *
     * @param string $ruolo
     *
     * @return Utenti
     */
    public function setRuolo($ruolo)
    {
        $this->ruolo = $ruolo;

        return $this;
    }

    /**
     * Get ruolo
     *
     * @return string
     */
    public function getRuolo()
    {
        return $this->ruolo;
    }

    /**
     * Set dataRegistrazione
     *
     * @param \DateTime $dataRegistrazione
     *
     * @return Utenti
     */
    public function setDataRegistrazione($dataRegistrazione)
    {
        $this->dataRegistrazione = $dataRegistrazione;

        return $this;
    }

    /**
     * Get dataRegistrazione
     *
     * @return \DateTime
     */
    public function getDataRegistrazione()
    {
        return $this->dataRegistrazione;
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
     * Set email
     *
     * @param string $email
     *
     * @return Utenti
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
     * Set password
     *
     * @param string $password
     *
     * @return Utenti
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
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
}
