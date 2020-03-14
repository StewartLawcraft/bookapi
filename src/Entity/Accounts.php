<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccountsRepository")
 */
class Accounts
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
    private $NickName;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Password;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Avatar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Favourite;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Role;

    /**
     * @ORM\Column(type="bigint", nullable=true)
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

    public function getNickName(): ?string
    {
        return $this->NickName;
    }

    public function setNickName(string $NickName): self
    {
        $this->NickName = $NickName;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->Avatar;
    }

    public function setAvatar(?string $Avatar): self
    {
        $this->Avatar = $Avatar;

        return $this;
    }

    public function getFavourite(): ?string
    {
        return $this->Favourite;
    }

    public function setFavourite(?string $Favourite): self
    {
        $this->Favourite = $Favourite;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->Role;
    }

    public function setRole(?string $Role): self
    {
        $this->Role = $Role;

        return $this;
    }
}
