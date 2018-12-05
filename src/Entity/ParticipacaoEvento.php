<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticipacaoEventoRepository")
 */
class ParticipacaoEvento
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
    private $titulo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $periodo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $local;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tipo_de_apresentacao;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ano", inversedBy="participacaoEventos")
     */
    private $ano;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(?string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getPeriodo(): ?string
    {
        return $this->periodo;
    }

    public function setPeriodo(?string $periodo): self
    {
        $this->periodo = $periodo;

        return $this;
    }

    public function getLocal(): ?string
    {
        return $this->local;
    }

    public function setLocal(?string $local): self
    {
        $this->local = $local;

        return $this;
    }

    public function getTipoDeApresentacao(): ?string
    {
        return $this->tipo_de_apresentacao;
    }

    public function setTipoDeApresentacao(?string $tipo_de_apresentacao): self
    {
        $this->tipo_de_apresentacao = $tipo_de_apresentacao;

        return $this;
    }

    public function getAno(): ?ano
    {
        return $this->ano;
    }

    public function setAno(?ano $ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    public function __toString() {
        if (empty($this->getTitulo()))
            return 'título vazio';
        return $this->getTitulo();
    }

}
