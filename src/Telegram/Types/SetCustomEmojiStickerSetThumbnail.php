<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets a custom emoji sticker set thumbnail
 */
class SetCustomEmojiStickerSetThumbnail extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Sticker set name. The sticker set must be owned by the current user */
        #[SerializedName('name')]
        private string $name,
        /** Identifier of the custom emoji from the sticker set, which will be set as sticker set thumbnail; pass 0 to remove the sticker set thumbnail */
        #[SerializedName('custom_emoji_id')]
        private int $customEmojiId,
    ) {
    }

    /**
     * Get Sticker set name. The sticker set must be owned by the current user
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Sticker set name. The sticker set must be owned by the current user
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Identifier of the custom emoji from the sticker set, which will be set as sticker set thumbnail; pass 0 to remove the sticker set thumbnail
     */
    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    /**
     * Set Identifier of the custom emoji from the sticker set, which will be set as sticker set thumbnail; pass 0 to remove the sticker set thumbnail
     */
    public function setCustomEmojiId(int $customEmojiId): self
    {
        $this->customEmojiId = $customEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setCustomEmojiStickerSetThumbnail',
            'name' => $this->getName(),
            'custom_emoji_id' => $this->getCustomEmojiId(),
        ];
    }
}
