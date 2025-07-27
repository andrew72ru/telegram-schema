<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a location.
 */
class InputMessageLocation extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Location to be sent */
        #[SerializedName('location')]
        private Location|null $location = null,
        /** Period for which the location can be updated, in seconds; must be between 60 and 86400 for a temporary live location, 0x7FFFFFFF for permanent live location, and 0 otherwise */
        #[SerializedName('live_period')]
        private int $livePeriod,
        /** For live locations, a direction in which the location moves, in degrees; 1-360. Pass 0 if unknown */
        #[SerializedName('heading')]
        private int $heading,
        /** For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled. Can't be enabled in channels and Saved Messages */
        #[SerializedName('proximity_alert_radius')]
        private int $proximityAlertRadius,
    ) {
    }

    /**
     * Get Location to be sent.
     */
    public function getLocation(): Location|null
    {
        return $this->location;
    }

    /**
     * Set Location to be sent.
     */
    public function setLocation(Location|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get Period for which the location can be updated, in seconds; must be between 60 and 86400 for a temporary live location, 0x7FFFFFFF for permanent live location, and 0 otherwise.
     */
    public function getLivePeriod(): int
    {
        return $this->livePeriod;
    }

    /**
     * Set Period for which the location can be updated, in seconds; must be between 60 and 86400 for a temporary live location, 0x7FFFFFFF for permanent live location, and 0 otherwise.
     */
    public function setLivePeriod(int $livePeriod): self
    {
        $this->livePeriod = $livePeriod;

        return $this;
    }

    /**
     * Get For live locations, a direction in which the location moves, in degrees; 1-360. Pass 0 if unknown.
     */
    public function getHeading(): int
    {
        return $this->heading;
    }

    /**
     * Set For live locations, a direction in which the location moves, in degrees; 1-360. Pass 0 if unknown.
     */
    public function setHeading(int $heading): self
    {
        $this->heading = $heading;

        return $this;
    }

    /**
     * Get For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled. Can't be enabled in channels and Saved Messages.
     */
    public function getProximityAlertRadius(): int
    {
        return $this->proximityAlertRadius;
    }

    /**
     * Set For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled. Can't be enabled in channels and Saved Messages.
     */
    public function setProximityAlertRadius(int $proximityAlertRadius): self
    {
        $this->proximityAlertRadius = $proximityAlertRadius;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageLocation',
            'location' => $this->getLocation(),
            'live_period' => $this->getLivePeriod(),
            'heading' => $this->getHeading(),
            'proximity_alert_radius' => $this->getProximityAlertRadius(),
        ];
    }
}
