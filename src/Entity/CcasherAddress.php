<?php

namespace App\Entity;

use App\Repository\CcasherAddressRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CcasherAddressRepository::class)]
class CcasherAddress
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'currentAddress', targetEntity: EdataCasharer::class)]
    private ?Collection $eDataCasharers = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEDataCasharers(): ?Collection
    {
        return $this->eDataCasharers;
    }

    public function setEDataCasharers(?Collection $eDataCasharers): void
    {
        $this->eDataCasharers = $eDataCasharers;
    }
}
