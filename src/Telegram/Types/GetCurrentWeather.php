<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the current weather in the given location @location The location
 */
class GetCurrentWeather extends CurrentWeather implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('location')]
        private Location|null $location = null,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCurrentWeather',
            'location' => $this->getLocation(),
        ];
    }
}
