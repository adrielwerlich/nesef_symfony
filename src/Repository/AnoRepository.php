<?php

namespace App\Repository;

use App\Entity\Ano;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ano|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ano|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ano[]    findAll()
 * @method Ano[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ano::class);
    }

    // /**
    //  * @return Ano[] Returns an array of Ano objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ano
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
