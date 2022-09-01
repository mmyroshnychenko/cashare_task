<?php

namespace App\Entity;

use App\Repository\EdataContractRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EdataContractRepository::class)]
class EdataContract
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: EdataPayment::class, inversedBy: 'eDataContracts')]
    private ?EdataPayment $nextInstalment = null;

    #[ORM\OneToMany(mappedBy: 'contract', targetEntity: EdataAuction::class)]
    private ?Collection $eDataAuctions = null;

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

    public function getNextInstalment(): ?EdataPayment
    {
        return $this->nextInstalment;
    }

    public function setNextInstalment(?EdataPayment $nextInstalment): void
    {
        $this->nextInstalment = $nextInstalment;
    }
}
