<?php

namespace App\Entity;

use App\Repository\EdataPaymentRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EdataPaymentRepository::class)]
class EdataPayment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'nextInstalment', targetEntity: EdataContract::class)]
    private ?Collection $eDataContracts = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEDataContracts(): ?Collection
    {
        return $this->eDataContracts;
    }

    public function setEDataContracts(?Collection $eDataContracts): void
    {
        $this->eDataContracts = $eDataContracts;
    }
}
