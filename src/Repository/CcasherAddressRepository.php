<?php

namespace App\Repository;

use App\Entity\CcasherAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CcasherAddress>
 *
 * @method CcasherAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method CcasherAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method CcasherAddress[]    findAll()
 * @method CcasherAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CcasherAddressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CcasherAddress::class);
    }

    public function add(CcasherAddress $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CcasherAddress $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
