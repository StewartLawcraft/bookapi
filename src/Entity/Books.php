<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BooksRepository")
 */
class Books
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $Id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $Author;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $Release_Date;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Created;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Category;

    /**
     * @ORM\Column(type="bigint")
     */
   

    public function getId(): ?int
    {
        return $this->Id;
    }

    public function setId(string $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->Author;
    }

    public function setAuthor(string $Author): self
    {
        $this->Author = $Author;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->Release_Date;
    }

    public function setReleaseDate(?\DateTimeInterface $Release_Date): self
    {
        $this->Release_Date = $Release_Date;

        return $this;
    }

    public function getCreated(): ?string
    {
        return $this->Created;
    }

    public function setCreated(string $Created): self
    {
        $this->Created = $Created;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->Category;
    }

    public function setCategory(string $Category): self
    {
        $this->Category = $Category;

        return $this;
    }
}
