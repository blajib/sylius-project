<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\ResourceInterface;

interface SupplierInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function getName(): ?string;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @return ?string
     */
    public function getEmail(): ?string;

    /**
     * @param ?string $email
     */
    public function setEmail(string $email): void;

    /**
     * @return int|null
     */
    public function countProducts(): ?int;

    /**
     * @return string|null
     */
    public function getState(): ?string;

    public function setState(?string $state): void;

    /**
     * @return Collection
     */
    public function getProducts(): Collection;
}
