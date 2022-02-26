<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use ContainerAqA6E8n\PaginatorInterface_82dac15;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $teeShirts = $this->repository->findByCategorie("Tee Shirt");
        $shoes = $this->repository->findByCategorie("Chaussure");


        return $this->render('index.html.twig', [
            'teeShirts' => $teeShirts,
            'shoes' => $shoes,
        ]);
    }

    #[Route('/shop', name: 'shop')]
    public function shop(Request $request, PaginatorInterface $paginator): Response
    {
        $products = $this->repository->findAll();

        $articles = $paginator->paginate(
            $products, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );

        return $this->render('shop.html.twig', [
            'products' => $articles,
        ]);
    }

    #[Route('/recherche', name: 'recherche')]
    public function recherche(Request $request, PaginatorInterface $paginator): Response
    {
        $products = $this->repository->findBySearch($request->get('search'));

        $articles = $paginator->paginate(
            $products, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );

        return $this->render('shop.html.twig', [
            'products' => $articles,
            'search' => true,
            'string' => $request->get('search')
         ]);
    }

    #[Route('/categorie/{name}', name: 'recherche.categorie')]
    public function categorie(Request $request, PaginatorInterface $paginator): Response
    {
        $products = $this->repository->findBy(array('Categorie' => $request->get('name')));
        $size = [];

        // if ($request->get('tailles')) {

        // $products = $this->repository->findBySize($request->get('name'), $request->get('tailles'));
            
        // }
        if (!$request->get('tailles')) {
            $articles = $paginator->paginate(
                $products, // Requête contenant les données à paginer (ici nos articles)
                $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
                6 // Nombre de résultats par page
            );

            return $this->render('shop.html.twig', [
                'products' => $articles,
                'categorie' => true,
                'string' => $request->get('name'),
            ]);

        } else {
            return $this->render('shop.html.twig', [
                'products' => $products,
                'categorie' => true,
                'string' => $request->get('name'),
                'tailles_filter' => $request->get('tailles')
            ]);
        }



    }

    
}
