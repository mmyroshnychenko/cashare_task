<?php

namespace App\Repository;

use App\Entity\Cloan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cloan>
 *
 * @method Cloan|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cloan|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cloan[]    findAll()
 * @method Cloan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cloan::class);
    }

    public function add(Cloan $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Cloan $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
