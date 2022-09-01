<?php

namespace App\Repository;

use App\Entity\EdataContract;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EdataContract>
 *
 * @method EdataContract|null find($id, $lockMode = null, $lockVersion = null)
 * @method EdataContract|null findOneBy(array $criteria, array $orderBy = null)
 * @method EdataContract[]    findAll()
 * @method EdataContract[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EdataContractRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EdataContract::class);
    }

    public function add(EdataContract $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EdataContract $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
