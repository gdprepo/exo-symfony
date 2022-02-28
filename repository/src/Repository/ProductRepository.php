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

    public function findBySize($categorie, $sizes)
    {
        // dd($categorie);
        // $query = $this->createQueryBuilder('a')->where('a.Categorie = :val')
        //     ->setParameter('val', $categorie);
        // // dd($query->expr()->literal($sizes));
        // // $ors[] = $query->expr()->in('a.Tailles = '.$query->expr()->literal($sizes[0]));
        
        // foreach ($sizes as $size) {
        // $query->andWhere($query->expr()->in('a.Tailles', ':my_array'))
        //     ->setParameter('my_array', $sizes);
        // }

        // $qb = $this->createQueryBuilder('a');
        // $qb = $qb->where($qb->expr()->in('a.Tailles', array('XS')));

        

        return $qb
                ->getQuery()
                ->getResult()
                ;
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
