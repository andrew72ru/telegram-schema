<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A user in the chat came within proximity alert range from the current user @distance The distance to the user.
 */
class PushMessageContentProximityAlertTriggered extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('distance')]
        private int $distance,
    ) {
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
            '@type' => 'pushMessageContentProximityAlertTriggered',
            'distance' => $this->getDistance(),
        ];
    }
}
