<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Forms;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

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

    // #[Route('/dashboard/create', name: 'dashboard.create')]
    // public function add(Request $request): Response
    // {
    //     $id = $request->get('id');
    //     $product = new Product();

    //     if ($request->isMethod('post')) {
    //         if ($request->get('title')) {
    //             $product->setTitle($request->get('title'));
    //         }

    //         if ($request->get('description')) {
    //             $product->setDescription($request->get('description'));
    //         }

    //         $file = $request->files->get('image');
    //         $uploads_directory = $this->getParameter('upload_directory');

    //         $filename = md5(uniqid()) . '.' . $file->guessExtension();

    //         $file->move(
    //             $uploads_directory,
    //             $filename
    //         );

    //         $product->setImage($filename);
    //         $product->setPrice($request->get('price'));
    //         $product->setCategorie($request->get('categorie'));
    //         $product->setTailles($request->get('tailleTeeShirt'));

    //         if ($request->get('tags')) {
    //             $arr_tags = explode(',', $request->get('tags'));
    //             $product->setKeyWords($arr_tags);
    //         }

    //         $this->em->persist($product);
    //         $this->em->flush();

    //         $this->addFlash("success", "Le produit à bien été créé !");
    //         return $this->redirectToRoute('dashboard');
    //     }

    //     return $this->render('dashboard/productAdd.html.twig', [
    //         'id' => $id,
    //         'product' => $product
    //     ]);
    // }

    #[Route('/dashboard/create', name: 'dashboard.create')]
    #[Route('/dashboard/{id}/edit', name: 'dashboard.edit')]
    public function edit(int $id = null, Request $request, SluggerInterface $slugger): Response
    {
        // $id = $request->get("id");
        if ($id !== null) {
            $product = $this->repository->findOneBy(array('id'=>$id));
            if ($product->getCategorie() == "Tee Shirt") {
                $sizes = ["XS", "S", "M", "L", "XL"];
            } else {
                $sizes = ["38", "39", "40", "41", "42", "43", "44", "45", "46"];
            }
        } else {
            // $formFactory = $this->createForm(ProductType::class);
            $product = new Product();
        }

        $formFactory = $this->createForm(ProductType::class, $product);

        $formFactory->handleRequest($request);

        if ($formFactory->isSubmitted() && $formFactory->isValid()) {
            if (!$product->getId()) {
                $product->setCreatedAt(new \Datetime());
            }

            if ($request->get('Categorie')) {
                $product->setCategorie($request->get('Categorie'));
            }

            if ($request->get('Keywords')) {
                $arr_tags = explode(',', $request->get('Keywords'));
                $product->setKeyWords($arr_tags);
            }

            if ($request->get('Tailles')) {
                $product->setTailles($request->get('Tailles'));
            }

            $imageFile = $formFactory->get('Image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imageFile->move(
                        $this->getParameter('upload_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'imageFilename' property to store the PDF file name
                // instead of its contents
                $product->setImage($newFilename);
            }

            $this->em->persist($product);
            $this->em->flush();

            $this->addFlash("success", "Le produit à bien été mis à jour !");
            return $this->redirectToRoute('dashboard');
        }

        if (isset($sizes)) {
            $params = [
                'product' => $product,
                'sizes' => $sizes,
                'formProduct' => $formFactory->createView()
            ];
        } else {
            $params = [
                'product' => $product,
                'formProduct' => $formFactory->createView()
            ];
        }


        return $this->render('dashboard/productEdit.html.twig', $params);
    }
}
