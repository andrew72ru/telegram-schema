<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * One shipping option
 */
class ShippingOption implements \JsonSerializable
{
    public function __construct(
        /** Shipping option identifier */
        #[SerializedName('id')]
        private string $id,
        /** Option title */
        #[SerializedName('title')]
        private string $title,
        /** A list of objects used to calculate the total shipping costs */
        #[SerializedName('price_parts')]
        private array|null $priceParts = null,
    ) {
    }

    /**
     * Get Shipping option identifier
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Shipping option identifier
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Option title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Option title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get A list of objects used to calculate the total shipping costs
     */
    public function getPriceParts(): array|null
    {
        return $this->priceParts;
    }

    /**
     * Set A list of objects used to calculate the total shipping costs
     */
    public function setPriceParts(array|null $priceParts): self
    {
        $this->priceParts = $priceParts;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'shippingOption',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'price_parts' => $this->getPriceParts(),
        ];
    }
}
