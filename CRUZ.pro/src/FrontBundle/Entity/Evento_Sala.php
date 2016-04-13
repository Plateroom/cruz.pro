<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento_Sala
 *
 * @ORM\Table(name="evento__sala")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\Evento_SalaRepository")
 */
class Evento_Sala
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
     * @return Evento_Sala
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

