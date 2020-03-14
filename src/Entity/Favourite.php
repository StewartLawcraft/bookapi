<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FavouriteRepository")
 */
class Favourite
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
    private $Book_Id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Acc_int;

    /**
     * @ORM\Column(type="bigint")
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

    public function getBookId(): ?string
    {
        return $this->Book_Id;
    }

    public function setBookId(string $Book_Id): self
    {
        $this->Book_Id = $Book_Id;

        return $this;
    }

    public function getAccInt(): ?string
    {
        return $this->Acc_int;
    }

    public function setAccInt(string $Acc_int): self
    {
        $this->Acc_int = $Acc_int;

        return $this;
    }
}
