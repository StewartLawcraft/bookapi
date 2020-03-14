<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
    private $Category_Title;

    /**
     * @ORM\Column(type="string", length=55)
     */
   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getCategoryTitle(): ?string
    {
        return $this->Category_Title;
    }

    public function setCategoryTitle(string $Category_Title): self
    {
        $this->Category_Title = $Category_Title;

        return $this;
    }
}
