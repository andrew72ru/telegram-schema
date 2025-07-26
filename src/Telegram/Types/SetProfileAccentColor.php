<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes accent color and background custom emoji for profile of the current user; for Telegram Premium users only
 */
class SetProfileAccentColor extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the accent color to use for profile; pass -1 if none */
        #[SerializedName('profile_accent_color_id')]
        private int $profileAccentColorId,
        /** Identifier of a custom emoji to be shown on the user's profile photo background; 0 if none */
        #[SerializedName('profile_background_custom_emoji_id')]
        private int $profileBackgroundCustomEmojiId,
    ) {
    }

    /**
     * Get Identifier of the accent color to use for profile; pass -1 if none
     */
    public function getProfileAccentColorId(): int
    {
        return $this->profileAccentColorId;
    }

    /**
     * Set Identifier of the accent color to use for profile; pass -1 if none
     */
    public function setProfileAccentColorId(int $profileAccentColorId): self
    {
        $this->profileAccentColorId = $profileAccentColorId;

        return $this;
    }

    /**
     * Get Identifier of a custom emoji to be shown on the user's profile photo background; 0 if none
     */
    public function getProfileBackgroundCustomEmojiId(): int
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    /**
     * Set Identifier of a custom emoji to be shown on the user's profile photo background; 0 if none
     */
    public function setProfileBackgroundCustomEmojiId(int $profileBackgroundCustomEmojiId): self
    {
        $this->profileBackgroundCustomEmojiId = $profileBackgroundCustomEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setProfileAccentColor',
            'profile_accent_color_id' => $this->getProfileAccentColorId(),
            'profile_background_custom_emoji_id' => $this->getProfileBackgroundCustomEmojiId(),
        ];
    }
}
