<?php

namespace App\Entity;

use App\Repository\PersonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonRepository::class)
 */
class Person
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $person_type;

    /**
     * @ORM\Column(type="string", length=18)
     */
    private $person_identifier;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $person_name;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $person_email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonType(): ?string
    {
        return $this->person_type;
    }

    public function setPersonType(string $person_type): self
    {
        $this->person_type = $person_type;

        return $this;
    }

    public function getPersonIdentifier(): ?string
    {
        return $this->person_identifier;
    }

    public function setPersonIdentifier(string $person_identifier): self
    {
        $this->person_identifier = $person_identifier;

        return $this;
    }

    public function getPersonName(): ?string
    {
        return $this->person_name;
    }

    public function setPersonName(string $person_name): self
    {
        $this->person_name = $person_name;

        return $this;
    }

    public function getPersonEmail(): ?string
    {
        return $this->person_email;
    }

    public function setPersonEmail(string $person_email): self
    {
        $this->person_email = $person_email;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
