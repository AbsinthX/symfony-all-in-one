<?php declare(strict_types=1);

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName("Product 1");
        $product->setDescription("Product 1 description");
        $product->setSize(100);

        $manager->persist($product);

        $product = new Product();
        $product->setName("Product 2");
        $product->setDescription("Product 2 description");
        $product->setSize(200);

        $manager->persist($product);

        $manager->flush();
    }
}
