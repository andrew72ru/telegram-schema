<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new incoming event; for bots only @event A JSON-serialized event.
 */
class UpdateNewCustomEvent extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('event')]
        private string $event,
    ) {
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function setEvent(string $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewCustomEvent',
            'event' => $this->getEvent(),
        ];
    }
}
