<?php

namespace App\Entity;

use App\Repository\CompteBloqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteBloqueRepository::class)
 */
class CompteBloque
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $dateOuverture;

    /**
     * @ORM\Column(type="string")
     */
    private $dateFermeture;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroCompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $solde;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fraisOuv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $remuneration;

    /**
     * @ORM\ManyToOne(targetEntity=ClientBloque::class, inversedBy="compteBloques")
     */
    private $clientBloque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateOuverture(): ?string
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(string $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getDateFermeture(): ?string
    {
        return $this->dateFermeture;
    }

    public function setDateFermeture(string $dateFermeture): self
    {
        $this->dateFermeture = $dateFermeture;

        return $this;
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

    public function getSolde(): ?string
    {
        return $this->solde;
    }

    public function setSolde(string $solde): self
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

    public function getRemuneration(): ?string
    {
        return $this->remuneration;
    }

    public function setRemuneration(string $remuneration): self
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    public function getClientBloque(): ?ClientBloque
    {
        return $this->clientBloque;
    }

    public function setClientBloque(?ClientBloque $clientBloque): self
    {
        $this->clientBloque = $clientBloque;

        return $this;
    }
}
