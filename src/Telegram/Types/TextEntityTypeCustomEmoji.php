<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A custom emoji. The text behind a custom emoji must be an emoji. Only premium users can use premium custom emoji @custom_emoji_id Unique identifier of the custom emoji.
 */
class TextEntityTypeCustomEmoji extends TextEntityType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('custom_emoji_id')]
        private int $customEmojiId,
    ) {
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    public function setCustomEmojiId(int $customEmojiId): self
    {
        $this->customEmojiId = $customEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeCustomEmoji',
            'custom_emoji_id' => $this->getCustomEmojiId(),
        ];
    }
}
