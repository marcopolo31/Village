<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
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
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Information", mappedBy="categorie")
     */
    private $Information;

    public function __construct()
    {
        $this->Information = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Information[]
     */
    public function getInformation(): Collection
    {
        return $this->Information;
    }

    public function addInformation(Information $information): self
    {
        if (!$this->Information->contains($information)) {
            $this->Information[] = $information;
            $information->setCategorie($this);
        }

        return $this;
    }

    public function removeInformation(Information $information): self
    {
        if ($this->Information->contains($information)) {
            $this->Information->removeElement($information);
            // set the owning side to null (unless already changed)
            if ($information->getCategorie() === $this) {
                $information->setCategorie(null);
            }
        }

        return $this;
    }
}
