<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A custom emoji set as emoji status @custom_emoji_id Identifier of the custom emoji in stickerFormatTgs format.
 */
class EmojiStatusTypeCustomEmoji extends EmojiStatusType implements \JsonSerializable
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
            '@type' => 'emojiStatusTypeCustomEmoji',
            'custom_emoji_id' => $this->getCustomEmojiId(),
        ];
    }
}
