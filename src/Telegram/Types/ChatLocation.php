<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a location to which a chat is connected @location The location @address Location address; 1-64 characters, as defined by the chat owner
 */
class ChatLocation implements \JsonSerializable
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
            '@type' => 'chatLocation',
            'location' => $this->getLocation(),
            'address' => $this->getAddress(),
        ];
    }
}
