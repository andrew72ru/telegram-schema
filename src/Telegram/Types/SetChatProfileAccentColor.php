<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes accent color and background custom emoji for profile of a supergroup or channel chat. Requires can_change_info administrator right.
 */
class SetChatProfileAccentColor extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the accent color to use for profile; pass -1 if none. The chat must have at least profileAccentColor.min_supergroup_chat_boost_level for supergroups */
        #[SerializedName('profile_accent_color_id')]
        private int $profileAccentColorId,
        /** Identifier of a custom emoji to be shown on the chat's profile photo background; 0 if none. Use chatBoostLevelFeatures.can_set_profile_background_custom_emoji to check whether a custom emoji can be set */
        #[SerializedName('profile_background_custom_emoji_id')]
        private int $profileBackgroundCustomEmojiId,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the accent color to use for profile; pass -1 if none. The chat must have at least profileAccentColor.min_supergroup_chat_boost_level for supergroups.
     */
    public function getProfileAccentColorId(): int
    {
        return $this->profileAccentColorId;
    }

    /**
     * Set Identifier of the accent color to use for profile; pass -1 if none. The chat must have at least profileAccentColor.min_supergroup_chat_boost_level for supergroups.
     */
    public function setProfileAccentColorId(int $profileAccentColorId): self
    {
        $this->profileAccentColorId = $profileAccentColorId;

        return $this;
    }

    /**
     * Get Identifier of a custom emoji to be shown on the chat's profile photo background; 0 if none. Use chatBoostLevelFeatures.can_set_profile_background_custom_emoji to check whether a custom emoji can be set.
     */
    public function getProfileBackgroundCustomEmojiId(): int
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    /**
     * Set Identifier of a custom emoji to be shown on the chat's profile photo background; 0 if none. Use chatBoostLevelFeatures.can_set_profile_background_custom_emoji to check whether a custom emoji can be set.
     */
    public function setProfileBackgroundCustomEmojiId(int $profileBackgroundCustomEmojiId): self
    {
        $this->profileBackgroundCustomEmojiId = $profileBackgroundCustomEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatProfileAccentColor',
            'chat_id' => $this->getChatId(),
            'profile_accent_color_id' => $this->getProfileAccentColorId(),
            'profile_background_custom_emoji_id' => $this->getProfileBackgroundCustomEmojiId(),
        ];
    }
}
