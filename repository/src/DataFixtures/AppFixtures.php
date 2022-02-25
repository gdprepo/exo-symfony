<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categories = array(
            'Tee Shirt',
            'Chaussure',
        );
        
        for ($i = 0; $i < 20; $i++) {
            $key = array_rand($categories);
            $categorie = $categories[$key];

            $product = new Product();
            $product->setTitle('product '.$i);
            $product->setPrice(mt_rand(10, 100));
            $product->setCategorie($categorie);
            $product->setDescription("Description...");

            if ($categorie === "Tee Shirt") {
                $product->setTailles(['XS', 'XL']);
                $product->setImage("teeshirt-img-exemple.webp");
            } else {
                $product->setTailles(['38', '39', '40', '41', '42', '43', '44', '45', '46']);
                $product->setImage("shoe-img-exemple.webp");
            }

            $product->setKeywords(['fashion', 'tendance', 'new', 'homme', 'femme']);
            $product->setCreatedAt(new \DateTime());

            $manager->persist($product);
        }

        $user = new User();
        $user->setEmail('test@gmail.com');
        $user->setPassword('password');
        $manager->persist($user);


        $manager->flush();
    }
}
