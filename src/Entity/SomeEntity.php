<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SomeEntityRepository")
 */
class SomeEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $SomeName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SomeText;

    /**
     * @ORM\Column(type="integer")
     */
    private $SomeNumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSomeName(): ?string
    {
        return $this->SomeName;
    }

    public function setSomeName(string $SomeName): self
    {
        $this->SomeName = $SomeName;

        return $this;
    }

    public function getSomeText(): ?string
    {
        return $this->SomeText;
    }

    public function setSomeText(string $SomeText): self
    {
        $this->SomeText = $SomeText;

        return $this;
    }

    public function getSomeNumber(): ?int
    {
        return $this->SomeNumber;
    }

    public function setSomeNumber(int $SomeNumber): self
    {
        $this->SomeNumber = $SomeNumber;

        return $this;
    }
}
