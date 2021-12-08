<?php

namespace App\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

interface VideoGameInterface extends ResourceInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;

    /**
     * @return string|null
     */
    public function getHardware(): ?string;

    /**
     * @param string|null $hardware
     */
    public function setHardware(?string $hardware): void;
}
