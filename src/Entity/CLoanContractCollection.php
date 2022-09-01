<?php

namespace App\Entity;

use App\Repository\CLoanContractCollectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CLoanContractCollectionRepository::class)]
class CLoanContractCollection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: EdataAuction::class, inversedBy: 'cLoanContractCollection')]
    private ?EdataAuction $auction = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
