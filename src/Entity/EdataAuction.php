<?php

namespace App\Entity;

use App\Repository\EdataAuctionRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EdataAuctionRepository::class)]
class EdataAuction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: EdataContract::class, inversedBy: 'eDataAuctions')]
    private ?EdataContract $contract = null;

    #[ORM\ManyToOne(targetEntity: EdataCasharer::class, inversedBy: 'eDataAuctions')]
    private ?EdataCasharer $casher = null;

    #[ORM\ManyToOne(targetEntity: Cloan::class, inversedBy: 'eDataAuctions')]
    private ?Cloan $individualLoan = null;

    #[ORM\OneToMany(mappedBy: 'eDataAuction', targetEntity: CLoanContractCollection::class)]
    private ?Collection $cLoanContractCollection = null;

    #[ORM\Column]
    private ?int $aStatus = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContract(): ?EdataContract
    {
        return $this->contract;
    }

    public function setContract(?EdataContract $contract): void
    {
        $this->contract = $contract;
    }

    public function getCasher(): ?EdataCasharer
    {
        return $this->casher;
    }

    public function setCasher(?EdataCasharer $casher): void
    {
        $this->casher = $casher;
    }

    public function getIndividualLoan(): ?Cloan
    {
        return $this->individualLoan;
    }

    public function setIndividualLoan(?Cloan $individualLoan): void
    {
        $this->individualLoan = $individualLoan;
    }

    public function getCLoanContractCollection(): ?Collection
    {
        return $this->cLoanContractCollection;
    }

    public function setCLoanContractCollection(?Collection $cLoanContractCollection): void
    {
        $this->cLoanContractCollection = $cLoanContractCollection;
    }

    public function getAStatus(): ?int
    {
        return $this->aStatus;
    }

    public function setAStatus(?int $aStatus): void
    {
        $this->aStatus = $aStatus;
    }
}
