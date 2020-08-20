<?php

namespace App\Repository;

use App\Entity\ClientSimple;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientSimple|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientSimple|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientSimple[]    findAll()
 * @method ClientSimple[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientSimpleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientSimple::class);
    }

    // /**
    //  * @return ClientSimple[] Returns an array of ClientSimple objects
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
    public function findOneBySomeField($value): ?ClientSimple
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
