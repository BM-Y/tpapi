<?php

namespace App\Repository;

use App\Entity\Ggroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ggroup>
 *
 * @method Ggroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ggroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ggroup[]    findAll()
 * @method Ggroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GgroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ggroup::class);
    }

//    /**
//     * @return Ggroup[] Returns an array of Ggroup objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Ggroup
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
