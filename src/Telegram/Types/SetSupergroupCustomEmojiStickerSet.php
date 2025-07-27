<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the custom emoji sticker set of a supergroup; requires can_change_info administrator right. The chat must have at least chatBoostFeatures.min_custom_emoji_sticker_set_boost_level boost level to pass the corresponding color.
 */
class SetSupergroupCustomEmojiStickerSet extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** New value of the custom emoji sticker set identifier for the supergroup. Use 0 to remove the custom emoji sticker set in the supergroup */
        #[SerializedName('custom_emoji_sticker_set_id')]
        private int $customEmojiStickerSetId,
    ) {
    }

    /**
     * Get Identifier of the supergroup.
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Identifier of the supergroup.
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get New value of the custom emoji sticker set identifier for the supergroup. Use 0 to remove the custom emoji sticker set in the supergroup.
     */
    public function getCustomEmojiStickerSetId(): int
    {
        return $this->customEmojiStickerSetId;
    }

    /**
     * Set New value of the custom emoji sticker set identifier for the supergroup. Use 0 to remove the custom emoji sticker set in the supergroup.
     */
    public function setCustomEmojiStickerSetId(int $customEmojiStickerSetId): self
    {
        $this->customEmojiStickerSetId = $customEmojiStickerSetId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setSupergroupCustomEmojiStickerSet',
            'supergroup_id' => $this->getSupergroupId(),
            'custom_emoji_sticker_set_id' => $this->getCustomEmojiStickerSetId(),
        ];
    }
}
