<?php

namespace App\Entity;

use App\Repository\CompteCourantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteCourantRepository::class)
 */
class CompteCourant
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
     * @ORM\Column(type="string", length=255)
     */
    private $solde;

   
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $agios;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateOuverture;

    /**
     * @ORM\ManyToOne(targetEntity=ClientCourant::class, inversedBy="compteCourants")
     */
    private $clientCourant;

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

    public function getSolde(): ?string
    {
        return $this->solde;
    }

    public function setSolde(string $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

   

    public function getAgios(): ?string
    {
        return $this->agios;
    }

    public function setAgios(string $agios): self
    {
        $this->agios = $agios;

        return $this;
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

    public function getClientCourant(): ?ClientCourant
    {
        return $this->clientCourant;
    }

    public function setClientCourant(?ClientCourant $clientCourant): self
    {
        $this->clientCourant = $clientCourant;

        return $this;
    }
}
