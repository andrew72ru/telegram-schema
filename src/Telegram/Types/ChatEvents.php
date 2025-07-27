<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of chat events @events List of events.
 */
class ChatEvents implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('events')]
        private array|null $events = null,
    ) {
    }

    public function getEvents(): array|null
    {
        return $this->events;
    }

    public function setEvents(array|null $events): self
    {
        $this->events = $events;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEvents',
            'events' => $this->getEvents(),
        ];
    }
}
