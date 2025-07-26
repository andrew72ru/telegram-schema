<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Chat accent colors have changed
 */
class UpdateChatAccentColors extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The new chat accent color identifier */
        #[SerializedName('accent_color_id')]
        private int $accentColorId,
        /** The new identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none */
        #[SerializedName('background_custom_emoji_id')]
        private int $backgroundCustomEmojiId,
        /** The new chat profile accent color identifier; -1 if none */
        #[SerializedName('profile_accent_color_id')]
        private int $profileAccentColorId,
        /** The new identifier of a custom emoji to be shown on the profile background; 0 if none */
        #[SerializedName('profile_background_custom_emoji_id')]
        private int $profileBackgroundCustomEmojiId,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The new chat accent color identifier
     */
    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    /**
     * Set The new chat accent color identifier
     */
    public function setAccentColorId(int $accentColorId): self
    {
        $this->accentColorId = $accentColorId;

        return $this;
    }

    /**
     * Get The new identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none
     */
    public function getBackgroundCustomEmojiId(): int
    {
        return $this->backgroundCustomEmojiId;
    }

    /**
     * Set The new identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none
     */
    public function setBackgroundCustomEmojiId(int $backgroundCustomEmojiId): self
    {
        $this->backgroundCustomEmojiId = $backgroundCustomEmojiId;

        return $this;
    }

    /**
     * Get The new chat profile accent color identifier; -1 if none
     */
    public function getProfileAccentColorId(): int
    {
        return $this->profileAccentColorId;
    }

    /**
     * Set The new chat profile accent color identifier; -1 if none
     */
    public function setProfileAccentColorId(int $profileAccentColorId): self
    {
        $this->profileAccentColorId = $profileAccentColorId;

        return $this;
    }

    /**
     * Get The new identifier of a custom emoji to be shown on the profile background; 0 if none
     */
    public function getProfileBackgroundCustomEmojiId(): int
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    /**
     * Set The new identifier of a custom emoji to be shown on the profile background; 0 if none
     */
    public function setProfileBackgroundCustomEmojiId(int $profileBackgroundCustomEmojiId): self
    {
        $this->profileBackgroundCustomEmojiId = $profileBackgroundCustomEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatAccentColors',
            'chat_id' => $this->getChatId(),
            'accent_color_id' => $this->getAccentColorId(),
            'background_custom_emoji_id' => $this->getBackgroundCustomEmojiId(),
            'profile_accent_color_id' => $this->getProfileAccentColorId(),
            'profile_background_custom_emoji_id' => $this->getProfileBackgroundCustomEmojiId(),
        ];
    }
}
