<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManager;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security, ProductRepository $repository)
    {
        $this->security = $security;
        $this->repository = $repository;
        $this->em = $entityManager;
    }

    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response
    {
        $products = $this->repository->findAll();

        return $this->render('dashboard/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/dashboard/delete/{id}', name: 'dashboard.delete')]
    public function delete(Request $request): Response
    {
        $id = $request->get("id");
        $product = $this->repository->findOneBy(array('id'=>$id));

        $this->em->remove($product);
        $this->em->flush();

        $this->addFlash("success", "Le produit à bien été supprimé !");

        return $this->redirectToRoute('dashboard');
    }

    #[Route('/dashboard/create', name: 'dashboard.create')]
    public function add(Request $request): Response
    {
        $product = new Product();

        if ($request->isMethod('post')) {
            if ($request->get('title')) {
                $product->setTitle($request->get('title'));
            }

            if ($request->get('description')) {
                $product->setDescription($request->get('description'));
            }

            $file = $request->files->get('image');
            $uploads_directory = $this->getParameter('upload_directory');

            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            $file->move(
                $uploads_directory,
                $filename
            );

            $product->setImage($filename);
            $product->setPrice($request->get('price'));
            $product->setCategorie($request->get('categorie'));
            $product->setTailles($request->get('tailleTeeShirt'));

            if ($request->get('tags')) {
                $arr_tags = explode(',', $request->get('tags'));
                $product->setKeyWords($arr_tags);
            }

            $this->em->persist($product);
            $this->em->flush();

            $this->addFlash("success", "Le produit à bien été créé !");
            return $this->redirectToRoute('dashboard');
        }

        return $this->render('dashboard/productAdd.html.twig', [
            'id' => $id,
            'product' => $product
        ]);
    }

    #[Route('/dashboard/edit/{id}', name: 'dashboard.edit')]
    public function edit(Request $request): Response
    {
        $id = $request->get("id");
        $product = $this->repository->findOneBy(array('id'=>$id));

        if ($request->isMethod('post')) {
            if ($request->get('title')) {
                $product->setTitle($request->get('title'));
            }

            if ($request->get('description')) {
                $product->setTitle($request->get('title'));
            }

            if ($request->get('tags')) {
                $arr_tags = explode(',', $request->get('tags'));
                $product->setKeyWords($arr_tags);
            }

            if ($request->get('tailles')) {
                $product->setTailles($request->get('tailles'));
            }

            $this->em->persist($product);
            $this->em->flush();

            $this->addFlash("success", "Le produit à bien été mis à jour !");
            return $this->redirectToRoute('dashboard');
        }

        if ($product->getCategorie() == "Tee Shirt") {
            $sizes = ["XS", "S", "M", "L", "XL"];
        } else {
            $sizes = ["38", "39", "40", "41", "42", "43", "44", "45", "46"];

        }

        return $this->render('dashboard/productEdit.html.twig', [
            'id' => $id,
            'product' => $product,
            'sizes' => $sizes
        ]);
    }
}
