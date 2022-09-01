<?php

namespace App\Entity;

use App\Repository\EdataCasharerRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EdataCasharerRepository::class)]
class EdataCasharer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'casher', targetEntity: EdataAuction::class)]
    private ?Collection $eDataAuctions = null;

    #[ORM\ManyToOne(targetEntity: CcasherAddress::class, inversedBy: 'eDataCasharers')]
    private ?CcasherAddress $currentAddress = null;

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

    public function getCurrentAddress(): ?CcasherAddress
    {
        return $this->currentAddress;
    }

    public function setCurrentAddress(?CcasherAddress $currentAddress): void
    {
        $this->currentAddress = $currentAddress;
    }
}
