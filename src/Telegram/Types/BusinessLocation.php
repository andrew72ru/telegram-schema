<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a location of a business @location The location; may be null if not specified @address Location address; 1-96 characters
 */
class BusinessLocation implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('location')]
        private Location|null $location = null,
        #[SerializedName('address')]
        private string $address,
    ) {
    }

    public function getLocation(): Location|null
    {
        return $this->location;
    }

    public function setLocation(Location|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessLocation',
            'location' => $this->getLocation(),
            'address' => $this->getAddress(),
        ];
    }
}
