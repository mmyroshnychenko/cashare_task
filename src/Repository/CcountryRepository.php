<?php

namespace App\Repository;

use App\Entity\Ccountry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ccountry>
 *
 * @method Ccountry|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ccountry|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ccountry[]    findAll()
 * @method Ccountry[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CcountryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ccountry::class);
    }

    public function add(Ccountry $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Ccountry $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
