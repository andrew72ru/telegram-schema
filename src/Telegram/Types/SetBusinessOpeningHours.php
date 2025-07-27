<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the business opening hours of the current user. Requires Telegram Business subscription.
 */
class SetBusinessOpeningHours extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The new opening hours of the business; pass null to remove the opening hours; up to 28 time intervals can be specified */
        #[SerializedName('opening_hours')]
        private BusinessOpeningHours|null $openingHours = null,
    ) {
    }

    /**
     * Get The new opening hours of the business; pass null to remove the opening hours; up to 28 time intervals can be specified.
     */
    public function getOpeningHours(): BusinessOpeningHours|null
    {
        return $this->openingHours;
    }

    /**
     * Set The new opening hours of the business; pass null to remove the opening hours; up to 28 time intervals can be specified.
     */
    public function setOpeningHours(BusinessOpeningHours|null $openingHours): self
    {
        $this->openingHours = $openingHours;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBusinessOpeningHours',
            'opening_hours' => $this->getOpeningHours(),
        ];
    }
}
