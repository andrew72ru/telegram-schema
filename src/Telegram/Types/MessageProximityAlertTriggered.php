<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A user in the chat came within proximity alert range @traveler_id The identifier of a user or chat that triggered the proximity alert @watcher_id The identifier of a user or chat that subscribed for the proximity alert @distance The distance between the users
 */
class MessageProximityAlertTriggered extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('traveler_id')]
        private MessageSender|null $travelerId = null,
        #[SerializedName('watcher_id')]
        private MessageSender|null $watcherId = null,
        #[SerializedName('distance')]
        private int $distance,
    ) {
    }

    public function getTravelerId(): MessageSender|null
    {
        return $this->travelerId;
    }

    public function setTravelerId(MessageSender|null $travelerId): self
    {
        $this->travelerId = $travelerId;

        return $this;
    }

    public function getWatcherId(): MessageSender|null
    {
        return $this->watcherId;
    }

    public function setWatcherId(MessageSender|null $watcherId): self
    {
        $this->watcherId = $watcherId;

        return $this;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }

    public function setDistance(int $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageProximityAlertTriggered',
            'traveler_id' => $this->getTravelerId(),
            'watcher_id' => $this->getWatcherId(),
            'distance' => $this->getDistance(),
        ];
    }
}
