<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookCategoryRepository")
 */
class BookCategory
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
    private $Id_Book_Cat;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Id_Category;

    /**
     * @ORM\Column(type="bigint")
     */
   

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $Category_Name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getIdBookCat(): ?string
    {
        return $this->Id_Book_Cat;
    }

    public function setIdBookCat(string $Id_Book_Cat): self
    {
        $this->Id_Book_Cat = $Id_Book_Cat;

        return $this;
    }

    public function getIdCategory(): ?string
    {
        return $this->Id_Category;
    }

    public function setIdCategory(string $Id_Category): self
    {
        $this->Id_Category = $Id_Category;

        return $this;
    }

    public function getCategoryName(): ?string
    {
        return $this->Category_Name;
    }

    public function setCategoryName(string $Category_Name): self
    {
        $this->Category_Name = $Category_Name;

        return $this;
    }
}
