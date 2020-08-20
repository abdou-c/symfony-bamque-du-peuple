<?php

namespace App\Entity;

use App\Repository\ClientCourantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientCourantRepository::class)
 */
class ClientCourant
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
    private $numTelephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $numId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $adressMail;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="text")
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salaire;

    /**
     * @ORM\OneToMany(targetEntity=CompteCourant::class, mappedBy="clientCourant")
     */
    private $compteCourants;

    public function __construct()
    {
        $this->compteCourants = new ArrayCollection();
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

    public function getNumTelephone(): ?int
    {
        return $this->numTelephone;
    }

    public function setNumTelephone(int $numTelephone): self
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }

    public function getNumId(): ?int
    {
        return $this->numId;
    }

    public function setNumId(int $numId): self
    {
        $this->numId = $numId;

        return $this;
    }

    public function getAdressMail(): ?string
    {
        return $this->adressMail;
    }

    public function setAdressMail(string $adressMail): self
    {
        $this->adressMail = $adressMail;

        return $this;
    }

    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(string $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

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

    public function getSalaire(): ?string
    {
        return $this->salaire;
    }

    public function setSalaire(string $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * @return Collection|CompteCourant[]
     */
    public function getCompteCourants(): Collection
    {
        return $this->compteCourants;
    }

    public function addCompteCourant(CompteCourant $compteCourant): self
    {
        if (!$this->compteCourants->contains($compteCourant)) {
            $this->compteCourants[] = $compteCourant;
            $compteCourant->setClientCourant($this);
        }

        return $this;
    }

    public function removeCompteCourant(CompteCourant $compteCourant): self
    {
        if ($this->compteCourants->contains($compteCourant)) {
            $this->compteCourants->removeElement($compteCourant);
            // set the owning side to null (unless already changed)
            if ($compteCourant->getClientCourant() === $this) {
                $compteCourant->setClientCourant(null);
            }
        }

        return $this;
    }
}
