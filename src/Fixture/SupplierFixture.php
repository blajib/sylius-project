<?php

namespace App\Fixture;

use App\Entity\SupplierInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Generator;
use Sylius\Bundle\FixturesBundle\Fixture\AbstractFixture;
use Sylius\Bundle\FixturesBundle\Fixture\FixtureInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class SupplierFixture extends AbstractFixture implements FixtureInterface
{
    /**
     * @var ObjectManager
     */
    private $supplierManager;

    /**
     * @var FactoryInterface
     */
    private $supplierFactory;

    /**
     * @var Generator
     */
    private $faker;

    /**
     * @param ObjectManager    $supplierManager
     * @param FactoryInterface $supplierFactory
     * @param Generator        $faker
     */
    public function __construct(ObjectManager $supplierManager, FactoryInterface $supplierFactory, Generator $faker)
    {
        $this->supplierManager = $supplierManager;
        $this->supplierFactory = $supplierFactory;
        $this->faker = $faker;
    }

    public function load(array $options): void
    {
        for ($i = 0; $i < $options['count']; $i++){
            /** @var SupplierInterface $supplier */
            $supplier = $this->supplierFactory->createNew();
            $supplier->setEmail($this->faker->companyEmail);
            $supplier->setName($this->faker->company);
            $this->supplierManager->persist($supplier);

        }
        $this->supplierManager->flush();

    }

    public function getName(): string
    {
        return 'supplier';
    }

    protected function configureOptionsNode(ArrayNodeDefinition $optionsNode): void
    {
        $optionsNode
            ->children()
            ->integerNode('count')
            ;

    }

}
