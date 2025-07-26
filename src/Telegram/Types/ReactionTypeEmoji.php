<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A reaction with an emoji @emoji Text representation of the reaction
 */
class ReactionTypeEmoji extends ReactionType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('emoji')]
        private string $emoji,
    ) {
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reactionTypeEmoji',
            'emoji' => $this->getEmoji(),
        ];
    }
}
