<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of time zones @time_zones A list of time zones.
 */
class TimeZones implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('time_zones')]
        private array|null $timeZones = null,
    ) {
    }

    public function getTimeZones(): array|null
    {
        return $this->timeZones;
    }

    public function setTimeZones(array|null $timeZones): self
    {
        $this->timeZones = $timeZones;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'timeZones',
            'time_zones' => $this->getTimeZones(),
        ];
    }
}
