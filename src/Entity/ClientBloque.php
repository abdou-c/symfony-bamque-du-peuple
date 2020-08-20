<?php

namespace App\Entity;

use App\Repository\ClientBloqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientBloqueRepository::class)
 */
class ClientBloque
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $addresseMail;

    /**
     * @ORM\Column(type="integer")
     */
    private $numCni;

    /**
     * @ORM\Column(type="string")
     */
    private $dateNaiss;

    /**
     * @ORM\Column(type="text")
     */
    private $sexe;

    /**
     * @ORM\OneToMany(targetEntity=CompteBloque::class, mappedBy="clientBloque")
     */
    private $compteBloques;

    public function __construct()
    {
        $this->compteBloques = new ArrayCollection();
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

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAddresseMail(): ?string
    {
        return $this->addresseMail;
    }

    public function setAddresseMail(string $addresseMail): self
    {
        $this->addresseMail = $addresseMail;

        return $this;
    }

    public function getNumCni(): ?int
    {
        return $this->numCni;
    }

    public function setNumCni(int $numCni): self
    {
        $this->numCni = $numCni;

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

    /**
     * @return Collection|CompteBloque[]
     */
    public function getCompteBloques(): Collection
    {
        return $this->compteBloques;
    }

    public function addCompteBloque(CompteBloque $compteBloque): self
    {
        if (!$this->compteBloques->contains($compteBloque)) {
            $this->compteBloques[] = $compteBloque;
            $compteBloque->setClientBloque($this);
        }

        return $this;
    }

    public function removeCompteBloque(CompteBloque $compteBloque): self
    {
        if ($this->compteBloques->contains($compteBloque)) {
            $this->compteBloques->removeElement($compteBloque);
            // set the owning side to null (unless already changed)
            if ($compteBloque->getClientBloque() === $this) {
                $compteBloque->setClientBloque(null);
            }
        }

        return $this;
    }
}
