<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with information about a venue @venue The venue description
 */
class MessageVenue extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('venue')]
        private Venue|null $venue = null,
    ) {
    }

    public function getVenue(): Venue|null
    {
        return $this->venue;
    }

    public function setVenue(Venue|null $venue): self
    {
        $this->venue = $venue;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageVenue',
            'venue' => $this->getVenue(),
        ];
    }
}
