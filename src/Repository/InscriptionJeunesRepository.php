<?php

namespace App\Repository;

use App\Entity\InscriptionJeunes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InscriptionJeunes|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscriptionJeunes|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscriptionJeunes[]    findAll()
 * @method InscriptionJeunes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionJeunesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscriptionJeunes::class);
    }

    // /**
    //  * @return InscriptionJeunes[] Returns an array of InscriptionJeunes objects
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
    public function findOneBySomeField($value): ?InscriptionJeunes
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
