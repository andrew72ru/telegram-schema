<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes accent color and background custom emoji for the current user; for Telegram Premium users only.
 */
class SetAccentColor extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the accent color to use */
        #[SerializedName('accent_color_id')]
        private int $accentColorId,
        /** Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none */
        #[SerializedName('background_custom_emoji_id')]
        private int $backgroundCustomEmojiId,
    ) {
    }

    /**
     * Get Identifier of the accent color to use.
     */
    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    /**
     * Set Identifier of the accent color to use.
     */
    public function setAccentColorId(int $accentColorId): self
    {
        $this->accentColorId = $accentColorId;

        return $this;
    }

    /**
     * Get Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none.
     */
    public function getBackgroundCustomEmojiId(): int
    {
        return $this->backgroundCustomEmojiId;
    }

    /**
     * Set Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none.
     */
    public function setBackgroundCustomEmojiId(int $backgroundCustomEmojiId): self
    {
        $this->backgroundCustomEmojiId = $backgroundCustomEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setAccentColor',
            'accent_color_id' => $this->getAccentColorId(),
            'background_custom_emoji_id' => $this->getBackgroundCustomEmojiId(),
        ];
    }
}
