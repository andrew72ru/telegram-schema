<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes opening hours of a business @time_zone_id Unique time zone identifier @opening_hours Intervals of the time when the business is open
 */
class BusinessOpeningHours implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('time_zone_id')]
        private string $timeZoneId,
        #[SerializedName('opening_hours')]
        private array|null $openingHours = null,
    ) {
    }

    public function getTimeZoneId(): string
    {
        return $this->timeZoneId;
    }

    public function setTimeZoneId(string $timeZoneId): self
    {
        $this->timeZoneId = $timeZoneId;

        return $this;
    }

    public function getOpeningHours(): array|null
    {
        return $this->openingHours;
    }

    public function setOpeningHours(array|null $openingHours): self
    {
        $this->openingHours = $openingHours;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessOpeningHours',
            'time_zone_id' => $this->getTimeZoneId(),
            'opening_hours' => $this->getOpeningHours(),
        ];
    }
}
