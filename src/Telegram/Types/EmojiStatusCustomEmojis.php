<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of custom emoji identifiers for emoji statuses @custom_emoji_ids The list of custom emoji identifiers
 */
class EmojiStatusCustomEmojis implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('custom_emoji_ids')]
        private array|null $customEmojiIds = null,
    ) {
    }

    public function getCustomEmojiIds(): array|null
    {
        return $this->customEmojiIds;
    }

    public function setCustomEmojiIds(array|null $customEmojiIds): self
    {
        $this->customEmojiIds = $customEmojiIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiStatusCustomEmojis',
            'custom_emoji_ids' => $this->getCustomEmojiIds(),
        ];
    }
}
