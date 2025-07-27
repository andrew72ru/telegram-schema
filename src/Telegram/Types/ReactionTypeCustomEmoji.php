<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A reaction with a custom emoji @custom_emoji_id Unique identifier of the custom emoji.
 */
class ReactionTypeCustomEmoji extends ReactionType implements \JsonSerializable
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
            '@type' => 'reactionTypeCustomEmoji',
            'custom_emoji_id' => $this->getCustomEmojiId(),
        ];
    }
}
