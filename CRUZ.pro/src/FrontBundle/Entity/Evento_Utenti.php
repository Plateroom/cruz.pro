<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento_Utenti
 *
 * @ORM\Table(name="evento__utenti")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\Evento_UtentiRepository")
 */
class Evento_Utenti
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
     * @var int
     *
     * @ORM\Column(name="evento_id", type="integer")
     */
    private $eventoId;


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
     * Set eventoId
     *
     * @param integer $eventoId
     *
     * @return Evento_Utenti
     */
    public function setEventoId($eventoId)
    {
        $this->eventoId = $eventoId;

        return $this;
    }

    /**
     * Get eventoId
     *
     * @return int
     */
    public function getEventoId()
    {
        return $this->eventoId;
    }
}

