<?php

namespace App\Repository;

use App\Entity\Credentials;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Credentials|null find($id, $lockMode = null, $lockVersion = null)
 * @method Credentials|null findOneBy(array $criteria, array $orderBy = null)
 * @method Credentials[]    findAll()
 * @method Credentials[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CredentialsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Credentials::class);
    }

    // /**
    //  * @return Credentials[] Returns an array of Credentials objects
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
    public function findOneBySomeField($value): ?Credentials
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
