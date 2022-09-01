<?php

namespace App\Entity;

use App\Repository\CcountryRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CcountryRepository::class)]
class Ccountry
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'casherAddressAbroadCountry', targetEntity: Cloan::class)]
    private ?Collection $cloans = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCloans(): ?Collection
    {
        return $this->cloans;
    }

    public function setCloans(?Collection $cloans): void
    {
        $this->cloans = $cloans;
    }
}
