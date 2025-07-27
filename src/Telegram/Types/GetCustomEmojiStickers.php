<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of custom emoji stickers by their identifiers. Stickers are returned in arbitrary order. Only found stickers are returned.
 */
class GetCustomEmojiStickers extends Stickers implements \JsonSerializable
{
    public function __construct(
        /** Identifiers of custom emoji stickers. At most 200 custom emoji stickers can be received simultaneously */
        #[SerializedName('custom_emoji_ids')]
        private array|null $customEmojiIds = null,
    ) {
    }

    /**
     * Get Identifiers of custom emoji stickers. At most 200 custom emoji stickers can be received simultaneously.
     */
    public function getCustomEmojiIds(): array|null
    {
        return $this->customEmojiIds;
    }

    /**
     * Set Identifiers of custom emoji stickers. At most 200 custom emoji stickers can be received simultaneously.
     */
    public function setCustomEmojiIds(array|null $customEmojiIds): self
    {
        $this->customEmojiIds = $customEmojiIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCustomEmojiStickers',
            'custom_emoji_ids' => $this->getCustomEmojiIds(),
        ];
    }
}
