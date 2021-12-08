<?php

declare(strict_types=1);

namespace App\Entity\Product;

use App\Entity\Supplier;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{
    /**
     * @var Supplier|null
     * @ORM\ManyToOne (targetEntity="App\Entity\Supplier", inversedBy="products")
     */
    private $supplier;

    /**
     * @return Supplier|null
     */
    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }
    /**
     * @param Supplier|null $supplier
     */
    public function setSupplier(?Supplier $supplier): void
    {
        $this->supplier = $supplier;
    }


    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
