<?php

namespace App\Repository;

use App\Entity\EdataCasharer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EdataCasharer>
 *
 * @method EdataCasharer|null find($id, $lockMode = null, $lockVersion = null)
 * @method EdataCasharer|null findOneBy(array $criteria, array $orderBy = null)
 * @method EdataCasharer[]    findAll()
 * @method EdataCasharer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EdataCasharerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EdataCasharer::class);
    }

    public function add(EdataCasharer $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EdataCasharer $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
