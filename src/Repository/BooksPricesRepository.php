<?php

namespace App\Repository;

use App\Entity\BooksPrices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BooksPrices|null find($id, $lockMode = null, $lockVersion = null)
 * @method BooksPrices|null findOneBy(array $criteria, array $orderBy = null)
 * @method BooksPrices[]    findAll()
 * @method BooksPrices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BooksPricesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BooksPrices::class);
    }

    // /**
    //  * @return BooksPrices[] Returns an array of BooksPrices objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BooksPrices
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
