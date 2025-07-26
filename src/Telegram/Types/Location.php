<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a location on planet Earth
 */
class Location implements \JsonSerializable
{
    public function __construct(
        /** Latitude of the location in degrees; as defined by the sender */
        #[SerializedName('latitude')]
        private float $latitude,
        /** Longitude of the location, in degrees; as defined by the sender */
        #[SerializedName('longitude')]
        private float $longitude,
        /** The estimated horizontal accuracy of the location, in meters; as defined by the sender. 0 if unknown */
        #[SerializedName('horizontal_accuracy')]
        private float $horizontalAccuracy,
    ) {
    }

    /**
     * Get Latitude of the location in degrees; as defined by the sender
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Set Latitude of the location in degrees; as defined by the sender
     */
    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get Longitude of the location, in degrees; as defined by the sender
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Set Longitude of the location, in degrees; as defined by the sender
     */
    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get The estimated horizontal accuracy of the location, in meters; as defined by the sender. 0 if unknown
     */
    public function getHorizontalAccuracy(): float
    {
        return $this->horizontalAccuracy;
    }

    /**
     * Set The estimated horizontal accuracy of the location, in meters; as defined by the sender. 0 if unknown
     */
    public function setHorizontalAccuracy(float $horizontalAccuracy): self
    {
        $this->horizontalAccuracy = $horizontalAccuracy;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'location',
            'latitude' => $this->getLatitude(),
            'longitude' => $this->getLongitude(),
            'horizontal_accuracy' => $this->getHorizontalAccuracy(),
        ];
    }
}
