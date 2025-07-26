<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a location
 */
class MessageLocation extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** The location description */
        #[SerializedName('location')]
        private Location|null $location = null,
        /** Time relative to the message send date, for which the location can be updated, in seconds; if 0x7FFFFFFF, then location can be updated forever */
        #[SerializedName('live_period')]
        private int $livePeriod,
        /** Left time for which the location can be updated, in seconds. If 0, then the location can't be updated anymore. The update updateMessageContent is not sent when this field changes */
        #[SerializedName('expires_in')]
        private int $expiresIn,
        /** For live locations, a direction in which the location moves, in degrees; 1-360. If 0 the direction is unknown */
        #[SerializedName('heading')]
        private int $heading,
        /** For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000). 0 if the notification is disabled. Available only to the message sender */
        #[SerializedName('proximity_alert_radius')]
        private int $proximityAlertRadius,
    ) {
    }

    /**
     * Get The location description
     */
    public function getLocation(): Location|null
    {
        return $this->location;
    }

    /**
     * Set The location description
     */
    public function setLocation(Location|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get Time relative to the message send date, for which the location can be updated, in seconds; if 0x7FFFFFFF, then location can be updated forever
     */
    public function getLivePeriod(): int
    {
        return $this->livePeriod;
    }

    /**
     * Set Time relative to the message send date, for which the location can be updated, in seconds; if 0x7FFFFFFF, then location can be updated forever
     */
    public function setLivePeriod(int $livePeriod): self
    {
        $this->livePeriod = $livePeriod;

        return $this;
    }

    /**
     * Get Left time for which the location can be updated, in seconds. If 0, then the location can't be updated anymore. The update updateMessageContent is not sent when this field changes
     */
    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    /**
     * Set Left time for which the location can be updated, in seconds. If 0, then the location can't be updated anymore. The update updateMessageContent is not sent when this field changes
     */
    public function setExpiresIn(int $expiresIn): self
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    /**
     * Get For live locations, a direction in which the location moves, in degrees; 1-360. If 0 the direction is unknown
     */
    public function getHeading(): int
    {
        return $this->heading;
    }

    /**
     * Set For live locations, a direction in which the location moves, in degrees; 1-360. If 0 the direction is unknown
     */
    public function setHeading(int $heading): self
    {
        $this->heading = $heading;

        return $this;
    }

    /**
     * Get For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000). 0 if the notification is disabled. Available only to the message sender
     */
    public function getProximityAlertRadius(): int
    {
        return $this->proximityAlertRadius;
    }

    /**
     * Set For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000). 0 if the notification is disabled. Available only to the message sender
     */
    public function setProximityAlertRadius(int $proximityAlertRadius): self
    {
        $this->proximityAlertRadius = $proximityAlertRadius;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageLocation',
            'location' => $this->getLocation(),
            'live_period' => $this->getLivePeriod(),
            'expires_in' => $this->getExpiresIn(),
            'heading' => $this->getHeading(),
            'proximity_alert_radius' => $this->getProximityAlertRadius(),
        ];
    }
}
