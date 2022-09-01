<?php

namespace App\Repository;

use App\Entity\CLoanContractCollection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CLoanContractCollection>
 *
 * @method CLoanContractCollection|null find($id, $lockMode = null, $lockVersion = null)
 * @method CLoanContractCollection|null findOneBy(array $criteria, array $orderBy = null)
 * @method CLoanContractCollection[]    findAll()
 * @method CLoanContractCollection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CLoanContractCollectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CLoanContractCollection::class);
    }

    public function add(CLoanContractCollection $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CLoanContractCollection $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
