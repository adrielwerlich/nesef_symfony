<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnoRepository")
 */
class Ano
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ano;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ParticipacaoEvento", mappedBy="ano")
     */
    private $participacaoEventos;

    public function __construct()
    {
        $this->participacaoEventos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAno(): ?string
    {
        return $this->ano;
    }

    public function setAno(?string $ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * @return Collection|ParticipacaoEvento[]
     */
    public function getParticipacaoEventos(): Collection
    {
        return $this->participacaoEventos;
    }

    public function addParticipacaoEvento(ParticipacaoEvento $participacaoEvento): self
    {
        if (!$this->participacaoEventos->contains($participacaoEvento)) {
            $this->participacaoEventos[] = $participacaoEvento;
            $participacaoEvento->setAno($this);
        }

        return $this;
    }

    public function removeParticipacaoEvento(ParticipacaoEvento $participacaoEvento): self
    {
        if ($this->participacaoEventos->contains($participacaoEvento)) {
            $this->participacaoEventos->removeElement($participacaoEvento);
            // set the owning side to null (unless already changed)
            if ($participacaoEvento->getAno() === $this) {
                $participacaoEvento->setAno(null);
            }
        }

        return $this;
    }

    public function __toString() {
        if (empty($this->getAno()))
            return 'ano vazio';
        return $this->getAno();
    }
}
