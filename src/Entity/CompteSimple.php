<?php

namespace App\Entity;

use App\Repository\CompteSimpleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteSimpleRepository::class)
 */
class CompteSimple
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroCompte;

    /**
     * @ORM\Column(type="integer")
     */
    private $solde;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fraisOuv;

    /**
     * @ORM\Column(type="integer")
     */
    private $remuneration;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateOuv;

    /**
     * @ORM\ManyToOne(targetEntity=ClientSimple::class, inversedBy="compteSimples")
     */
    private $clientSimple;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroCompte(): ?int
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(int $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getFraisOuv(): ?string
    {
        return $this->fraisOuv;
    }

    public function setFraisOuv(string $fraisOuv): self
    {
        $this->fraisOuv = $fraisOuv;

        return $this;
    }

    public function getRemuneration(): ?int
    {
        return $this->remuneration;
    }

    public function setRemuneration(int $remuneration): self
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    public function getDateOuv(): ?string
    {
        return $this->dateOuv;
    }

    public function setDateOuv(string $dateOuv): self
    {
        $this->dateOuv = $dateOuv;

        return $this;
    }

    public function getClientSimple(): ?ClientSimple
    {
        return $this->clientSimple;
    }

    public function setClientSimple(?ClientSimple $clientSimple): self
    {
        $this->clientSimple = $clientSimple;

        return $this;
    }
}
