<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An area pointing to a venue @venue Information about the venue
 */
class StoryAreaTypeVenue extends StoryAreaType implements \JsonSerializable
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
            '@type' => 'storyAreaTypeVenue',
            'venue' => $this->getVenue(),
        ];
    }
}
