<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the business location of the current user. Requires Telegram Business subscription @location The new location of the business; pass null to remove the location.
 */
class SetBusinessLocation extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('location')]
        private BusinessLocation|null $location = null,
    ) {
    }

    public function getLocation(): BusinessLocation|null
    {
        return $this->location;
    }

    public function setLocation(BusinessLocation|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBusinessLocation',
            'location' => $this->getLocation(),
        ];
    }
}
