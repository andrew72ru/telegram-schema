<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The sticker is a custom emoji to be used inside message text and caption. Currently, only Telegram Premium users can use custom emoji
 */
class StickerFullTypeCustomEmoji extends StickerFullType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the custom emoji */
        #[SerializedName('custom_emoji_id')]
        private int $customEmojiId,
        /** True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places */
        #[SerializedName('needs_repainting')]
        private bool $needsRepainting,
    ) {
    }

    /**
     * Get Identifier of the custom emoji
     */
    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    /**
     * Set Identifier of the custom emoji
     */
    public function setCustomEmojiId(int $customEmojiId): self
    {
        $this->customEmojiId = $customEmojiId;

        return $this;
    }

    /**
     * Get True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
     */
    public function getNeedsRepainting(): bool
    {
        return $this->needsRepainting;
    }

    /**
     * Set True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
     */
    public function setNeedsRepainting(bool $needsRepainting): self
    {
        $this->needsRepainting = $needsRepainting;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerFullTypeCustomEmoji',
            'custom_emoji_id' => $this->getCustomEmojiId(),
            'needs_repainting' => $this->getNeedsRepainting(),
        ];
    }
}
