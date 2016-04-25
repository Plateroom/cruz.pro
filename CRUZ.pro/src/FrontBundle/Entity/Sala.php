<?php

namespace FrontBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Sala
 *
 * @ORM\Table(name="Sala")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\SalaRepository")
 * @Vich\Uploadable
 */
class Sala
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
     * @ORM\Column(name="nome", type="string")
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="sede", type="string", length=255)
     */
    private $sede;

    /**
     * @var string
     *
     * @ORM\Column(name="citta", type="string", length=255)
     */
    private $citta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_creazione", type="datetime", nullable=true)
     */
    private $dataCreazione;

    /**
     * @var int
     *
     * @ORM\Column(name="posti", type="integer")
     * @Assert\GreaterThan(value=0)
     */
    private $posti;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="immagine_url", type="text")
     */
    private $immagineUrl;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="sala_image", fileNameProperty="immagineUrl")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="text")
     */
    private $descrizione;


    /**
     * @ORM\OneToMany(targetEntity="Evento", mappedBy="sala")
     */
    private $eventoSale;

    public function __construct()
    {
        $this->eventoSale = new ArrayCollection();
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Sala
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
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
     * Set nome
     *
     * @param integer $nome
     *
     * @return Sala
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return int
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set sede
     *
     * @param string $sede
     *
     * @return Sala
     */
    public function setSede($sede)
    {
        $this->sede = $sede;

        return $this;
    }

    /**
     * Get sede
     *
     * @return string
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Set citta
     *
     * @param string $citta
     *
     * @return Sala
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string
     */
    public function getCitta()
    {
        return $this->citta;
    }

    /**
     * Set dataCreazione
     *
     * @param \DateTime $dataCreazione
     *
     * @return Sala
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
     * Set posti
     *
     * @param integer $posti
     *
     * @return Sala
     */
    public function setPosti($posti)
    {
        $this->posti = $posti;

        return $this;
    }

    /**
     * Get posti
     *
     * @return int
     */
    public function getPosti()
    {
        return $this->posti;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Sala
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
     * Set immagineUrl
     *
     * @param string $immagineUrl
     *
     * @return Sala
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
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Sala
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

////////////////////////////////
    public function setEventoSale($eventoSale)
    {
        $this->eventoSale = $eventoSale;

        return $this;
    }


    public function getEventoSale()
    {
        return $this->eventoSale;
    }
}

