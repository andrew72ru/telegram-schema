<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about an emoji reaction. Returns a 404 error if the reaction is not found @emoji Text representation of the reaction
 */
class GetEmojiReaction extends EmojiReaction implements \JsonSerializable
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
            '@type' => 'getEmojiReaction',
            'emoji' => $this->getEmoji(),
        ];
    }
}
