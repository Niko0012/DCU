<?php

namespace App\Repository;

use App\Entity\InfoInutile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InfoInutile|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfoInutile|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfoInutile[]    findAll()
 * @method InfoInutile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfoInutileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfoInutile::class);
    }

    // /**
    //  * @return InfoInutile[] Returns an array of InfoInutile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InfoInutile
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
