<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }
    public function findAll()
    {
        return $this->findBy(array(), array('created_at' => 'ASC'));
    }

    public function findByCategorie($categorie)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.Categorie = :val')
            ->setParameter('val', $categorie)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findBySearch($string)
    {
        return $this->createQueryBuilder('a')
           ->where('a.title LIKE :search')
           ->orWhere('a.Categorie LIKE :search')
           ->orWhere('a.Keywords LIKE :search')
           ->setParameter('search', '%'.$string.'%')
           ->getQuery()
           ->getResult()
           ;
        ;
    }

    public function findBySize($taille, $products)
    {
        $result = [];

        foreach($products as $product) {
            if (count(array_intersect($taille, $product->getTailles())) > 0) {
                array_push($result, $product);
            }
        }

        return $result;
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
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
    public function findOneBySomeField($value): ?Product
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
