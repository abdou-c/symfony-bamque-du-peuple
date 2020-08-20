<?php

namespace App\Entity;

use App\Repository\ClientSimpleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientSimpleRepository::class)
 */
class ClientSimple
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $cni;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateNaiss;

    /**
     * @ORM\Column(type="text")
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $adresseMail;

    /**
     * @ORM\OneToMany(targetEntity=CompteSimple::class, mappedBy="clientSimple")
     */
    private $compteSimples;

    public function __construct()
    {
        $this->compteSimples = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCni(): ?int
    {
        return $this->cni;
    }

    public function setCni(int $cni): self
    {
        $this->cni = $cni;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getDateNaiss(): ?string
    {
        return $this->dateNaiss;
    }

    public function setDateNaiss(string $dateNaiss): self
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAdresseMail(): ?string
    {
        return $this->adresseMail;
    }

    public function setAdresseMail(?string $adresseMail): self
    {
        $this->adresseMail = $adresseMail;

        return $this;
    }

    /**
     * @return Collection|CompteSimple[]
     */
    public function getCompteSimples(): Collection
    {
        return $this->compteSimples;
    }

    public function addCompteSimple(CompteSimple $compteSimple): self
    {
        if (!$this->compteSimples->contains($compteSimple)) {
            $this->compteSimples[] = $compteSimple;
            $compteSimple->setClientSimple($this);
        }

        return $this;
    }

    public function removeCompteSimple(CompteSimple $compteSimple): self
    {
        if ($this->compteSimples->contains($compteSimple)) {
            $this->compteSimples->removeElement($compteSimple);
            // set the owning side to null (unless already changed)
            if ($compteSimple->getClientSimple() === $this) {
                $compteSimple->setClientSimple(null);
            }
        }

        return $this;
    }
}
