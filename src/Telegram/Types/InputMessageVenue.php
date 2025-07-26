<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with information about a venue @venue Venue to send
 */
class InputMessageVenue extends InputMessageContent implements \JsonSerializable
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
            '@type' => 'inputMessageVenue',
            'venue' => $this->getVenue(),
        ];
    }
}
