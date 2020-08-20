<?php

namespace App\Repository;

use App\Entity\ClientCourant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientCourant|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientCourant|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientCourant[]    findAll()
 * @method ClientCourant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientCourantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientCourant::class);
    }

    // /**
    //  * @return ClientCourant[] Returns an array of ClientCourant objects
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
    public function findOneBySomeField($value): ?ClientCourant
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
