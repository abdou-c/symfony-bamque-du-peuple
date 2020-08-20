<?php

namespace App\Repository;

use App\Entity\CompteSimple;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CompteSimple|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompteSimple|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompteSimple[]    findAll()
 * @method CompteSimple[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompteSimpleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompteSimple::class);
    }

    // /**
    //  * @return CompteSimple[] Returns an array of CompteSimple objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CompteSimple
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
