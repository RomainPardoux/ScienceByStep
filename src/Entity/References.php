<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReferencesRepository")
 */
class References
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=400)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $newspaper;

    /**
     * @ORM\Column(type="date")
     */
    private $publicationDate;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $newspaperReferences;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getNewspaper(): ?string
    {
        return $this->newspaper;
    }

    public function setNewspaper(string $newspaper): self
    {
        $this->newspaper = $newspaper;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(\DateTimeInterface $publicationDate): self
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    public function getNewspaperReferences(): ?string
    {
        return $this->newspaperReferences;
    }

    public function setNewspaperReferences(string $newspaperReferences): self
    {
        $this->newspaperReferences = $newspaperReferences;

        return $this;
    }
}
