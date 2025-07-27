<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains 0-based match position @position The position of the match.
 */
class FoundPosition implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('position')]
        private int $position,
    ) {
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'foundPosition',
            'position' => $this->getPosition(),
        ];
    }
}
