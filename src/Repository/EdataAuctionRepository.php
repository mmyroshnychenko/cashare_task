<?php

namespace App\Repository;

use App\Entity\EdataAuction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EdataAuction>
 *
 * @method EdataAuction|null find($id, $lockMode = null, $lockVersion = null)
 * @method EdataAuction|null findOneBy(array $criteria, array $orderBy = null)
 * @method EdataAuction[]    findAll()
 * @method EdataAuction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EdataAuctionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EdataAuction::class);
    }

    public function add(EdataAuction $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EdataAuction $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getResult(): array
    {
        return $this->createQueryBuilder('la')
            ->join('la.contract', 'lc')
            ->join('la.casher', 'c')
            ->join('c.currentAddress', 'ca')
            ->join('la.individualLoan', 'vl')
            ->leftJoin('vl.casherAddressAbroadCountry', 'fac')
            ->leftJoin('lc.nextInstalment', 'li')
            ->leftJoin('la.cLoanContractCollection', 'lcc')
            ->andWhere('la.aStatus IN (:ids)')
            ->setParameter('ids', [6, 5, 4, 7, 2, 1, 0])
            ->orderBy('la.id', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
