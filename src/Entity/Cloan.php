<?php

namespace App\Entity;

use App\Repository\CloanRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CloanRepository::class)]
class Cloan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'individualLoan', targetEntity: EdataAuction::class)]
    private ?Collection $eDataAuctions = null;

    #[ORM\ManyToOne(targetEntity: Ccountry::class, inversedBy: 'cloans')]
    private ?Ccountry $casherAddressAbroadCountry = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEDataAuctions(): ?Collection
    {
        return $this->eDataAuctions;
    }

    public function setEDataAuctions(?Collection $eDataAuctions): void
    {
        $this->eDataAuctions = $eDataAuctions;
    }

    public function getCasherAddressAbroadCountry(): ?Ccountry
    {
        return $this->casherAddressAbroadCountry;
    }

    public function setCasherAddressAbroadCountry(?Ccountry $casherAddressAbroadCountry): void
    {
        $this->casherAddressAbroadCountry = $casherAddressAbroadCountry;
    }
}
