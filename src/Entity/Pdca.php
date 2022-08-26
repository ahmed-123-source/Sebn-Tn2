<?php

namespace App\Entity;

use App\Repository\PdcaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PdcaRepository::class)
 */
class Pdca
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Action;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Pilote;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_deb;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_fin;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Etat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Commentaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAction(): ?string
    {
        return $this->Action;
    }

    public function setAction(string $Action): self
    {
        $this->Action = $Action;

        return $this;
    }

    public function getPilote(): ?string
    {
        return $this->Pilote;
    }

    public function setPilote(string $Pilote): self
    {
        $this->Pilote = $Pilote;

        return $this;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->Date_deb;
    }

    public function setDateDeb(\DateTimeInterface $Date_deb): self
    {
        $this->Date_deb = $Date_deb;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->Date_fin;
    }

    public function setDateFin(\DateTimeInterface $Date_fin): self
    {
        $this->Date_fin = $Date_fin;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(?string $Commentaire): self
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }
}
