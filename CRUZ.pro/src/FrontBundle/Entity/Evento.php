<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DateTime;
/**
 * Evento
 *
 * @ORM\Table(name="Evento")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\EventoRepository")
 */
class Evento
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
     * @var \String
     *
     * @ORM\Column(name="nome", type="string")
     */
    private $nome;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_creazione", type="datetime")
     */
    private $dataCreazione;

    /**
     * @var \Date
     *
     * @ORM\Column(name="data_evento", type="date")
     */
    private $data;

    /**
     * @var \Date
     *
     * @ORM\Column(name="ore_inizio", type="time")
     */
    private $oraInizio;

    /**
     * @var \Time
     *
     * @ORM\Column(name="ore_fine", type="time")
     */
    private $oraFine;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="text")
     */
    private $descrizione;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="eventoUser")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Sala", inversedBy="eventoSale")
     * @ORM\JoinColumn(name="sala_id", referencedColumnName="id")
     */
    private $sala;

    /**
     * @ORM\ManyToMany(targetEntity="Invitati")
     * @ORM\JoinTable(name="Eventi_Invitati",
     *      joinColumns={@ORM\JoinColumn(name="evento_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="invitato_id", referencedColumnName="id", unique=true)}
     * )
     */
    private $listaInvitati;



    public function __construct()
    {
        $this->listaInvitati = new ArrayCollection();
    }



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Evento
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dataCreazione
     *
     * @param \DateTime $dataCreazione
     *
     * @return evento
     */
    public function setDataCreazione($dataCreazione)
    {
        $this->dataCreazione = new DateTime();

        return $this;
    }

    /**
     * Get dataCreazione
     *
     * @return \DateTime
     */
    public function getDataCreazione()
    {
        return $this->dataCreazione;
    }

    /**
     * @ORM\PrePersist
     */
    public function setDataCreazioneValue()
    {
        $this->dataCreazione = new DateTime();
    }

    /**
     * Set data
     *
     * @param \Date $data
     *
     * @return evento
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \Date
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     * Set oraInizio
     *
     * @param \Time $oraInizio
     *
     * @return evento
     */
    public function setOraInizio($oraInizio)
    {
        $this->oraInizio = $oraInizio;

        return $this;
    }

    /**
     * Get oraInizio
     *
     * @return \Time
     */
    public function getOraInizio()
    {
        return $this->oraInizio;
    }

    /**
     * Set oraFine
     *
     * @param \Time $oraFine
     *
     * @return evento
     */
    public function setOraFine($oraFine)
    {
        $this->oraFine = $oraFine;

        return $this;
    }

    /**
     * Get oraFine
     *
     * @return \Time
     */
    public function getOraFine()
    {
        return $this->oraFine;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return evento
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }


/////////////////////
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }


    public function getUser()
    {
        return $this->user;
    }


///////////////////////
    public function setListaInvitati($listaInvitati)
    {
        $this->listaInvitati = $listaInvitati;

        return $this;
    }


    public function getListaInvitati()
    {
        return $this->listaInvitati;
    }

/////////////////////////


    public function setSala($sala)
    {
        $this->sala = $sala;

        return $this;
    }


    public function getSala()
    {
        return $this->sala;
    }

}

