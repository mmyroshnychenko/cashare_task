<?php

namespace App\Repository;

use App\Entity\EdataPayment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EdataPayment>
 *
 * @method EdataPayment|null find($id, $lockMode = null, $lockVersion = null)
 * @method EdataPayment|null findOneBy(array $criteria, array $orderBy = null)
 * @method EdataPayment[]    findAll()
 * @method EdataPayment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EdataPaymentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EdataPayment::class);
    }

    public function add(EdataPayment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EdataPayment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
