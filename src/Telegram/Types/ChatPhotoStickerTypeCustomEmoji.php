<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about the custom emoji, which was used to create the chat photo.
 */
class ChatPhotoStickerTypeCustomEmoji extends ChatPhotoStickerType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the custom emoji */
        #[SerializedName('custom_emoji_id')]
        private int $customEmojiId,
    ) {
    }

    /**
     * Get Identifier of the custom emoji.
     */
    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    /**
     * Set Identifier of the custom emoji.
     */
    public function setCustomEmojiId(int $customEmojiId): self
    {
        $this->customEmojiId = $customEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatPhotoStickerTypeCustomEmoji',
            'custom_emoji_id' => $this->getCustomEmojiId(),
        ];
    }
}
