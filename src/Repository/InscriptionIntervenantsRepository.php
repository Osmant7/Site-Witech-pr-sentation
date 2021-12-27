<?php

namespace App\Repository;

use App\Entity\InscriptionIntervenants;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InscriptionIntervenants|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscriptionIntervenants|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscriptionIntervenants[]    findAll()
 * @method InscriptionIntervenants[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionIntervenantsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscriptionIntervenants::class);
    }

    // /**
    //  * @return InscriptionIntervenants[] Returns an array of InscriptionIntervenants objects
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
    public function findOneBySomeField($value): ?InscriptionIntervenants
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
