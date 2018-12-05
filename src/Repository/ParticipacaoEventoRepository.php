<?php

namespace App\Repository;

use App\Entity\ParticipacaoEvento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ParticipacaoEvento|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParticipacaoEvento|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParticipacaoEvento[]    findAll()
 * @method ParticipacaoEvento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipacaoEventoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ParticipacaoEvento::class);
    }

    // /**
    //  * @return ParticipacaoEvento[] Returns an array of ParticipacaoEvento objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ParticipacaoEvento
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
