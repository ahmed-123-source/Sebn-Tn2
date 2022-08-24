<?php

namespace App\Entity;

use App\Repository\AuditRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AuditRepository::class)
 */
class Audit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Projet;

    /**
     * @ORM\Column(type="integer")
     */
    private $Score;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Points_cntrl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Defaillances;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjet(): ?string
    {
        return $this->Projet;
    }

    public function setProjet(string $Projet): self
    {
        $this->Projet = $Projet;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->Score;
    }

    public function setScore(int $Score): self
    {
        $this->Score = $Score;

        return $this;
    }

    public function getPointsCntrl(): ?string
    {
        return $this->Points_cntrl;
    }

    public function setPointsCntrl(string $Points_cntrl): self
    {
        $this->Points_cntrl = $Points_cntrl;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDefaillances(): ?string
    {
        return $this->Defaillances;
    }

    public function setDefaillances(string $Defaillances): self
    {
        $this->Defaillances = $Defaillances;

        return $this;
    }
}
