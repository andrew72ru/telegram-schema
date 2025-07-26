<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An area pointing to a location @location The location @address Address of the location; pass null if unknown
 */
class InputStoryAreaTypeLocation extends InputStoryAreaType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('location')]
        private Location|null $location = null,
        #[SerializedName('address')]
        private LocationAddress|null $address = null,
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

    public function getAddress(): LocationAddress|null
    {
        return $this->address;
    }

    public function setAddress(LocationAddress|null $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputStoryAreaTypeLocation',
            'location' => $this->getLocation(),
            'address' => $this->getAddress(),
        ];
    }
}
