<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat's profile accent color or profile background custom emoji were changed.
 */
class ChatEventProfileAccentColorChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        /** Previous identifier of chat's profile accent color; -1 if none */
        #[SerializedName('old_profile_accent_color_id')]
        private int $oldProfileAccentColorId,
        /** Previous identifier of the custom emoji; 0 if none */
        #[SerializedName('old_profile_background_custom_emoji_id')]
        private int $oldProfileBackgroundCustomEmojiId,
        /** New identifier of chat's profile accent color; -1 if none */
        #[SerializedName('new_profile_accent_color_id')]
        private int $newProfileAccentColorId,
        /** New identifier of the custom emoji; 0 if none */
        #[SerializedName('new_profile_background_custom_emoji_id')]
        private int $newProfileBackgroundCustomEmojiId,
    ) {
    }

    /**
     * Get Previous identifier of chat's profile accent color; -1 if none.
     */
    public function getOldProfileAccentColorId(): int
    {
        return $this->oldProfileAccentColorId;
    }

    /**
     * Set Previous identifier of chat's profile accent color; -1 if none.
     */
    public function setOldProfileAccentColorId(int $oldProfileAccentColorId): self
    {
        $this->oldProfileAccentColorId = $oldProfileAccentColorId;

        return $this;
    }

    /**
     * Get Previous identifier of the custom emoji; 0 if none.
     */
    public function getOldProfileBackgroundCustomEmojiId(): int
    {
        return $this->oldProfileBackgroundCustomEmojiId;
    }

    /**
     * Set Previous identifier of the custom emoji; 0 if none.
     */
    public function setOldProfileBackgroundCustomEmojiId(int $oldProfileBackgroundCustomEmojiId): self
    {
        $this->oldProfileBackgroundCustomEmojiId = $oldProfileBackgroundCustomEmojiId;

        return $this;
    }

    /**
     * Get New identifier of chat's profile accent color; -1 if none.
     */
    public function getNewProfileAccentColorId(): int
    {
        return $this->newProfileAccentColorId;
    }

    /**
     * Set New identifier of chat's profile accent color; -1 if none.
     */
    public function setNewProfileAccentColorId(int $newProfileAccentColorId): self
    {
        $this->newProfileAccentColorId = $newProfileAccentColorId;

        return $this;
    }

    /**
     * Get New identifier of the custom emoji; 0 if none.
     */
    public function getNewProfileBackgroundCustomEmojiId(): int
    {
        return $this->newProfileBackgroundCustomEmojiId;
    }

    /**
     * Set New identifier of the custom emoji; 0 if none.
     */
    public function setNewProfileBackgroundCustomEmojiId(int $newProfileBackgroundCustomEmojiId): self
    {
        $this->newProfileBackgroundCustomEmojiId = $newProfileBackgroundCustomEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventProfileAccentColorChanged',
            'old_profile_accent_color_id' => $this->getOldProfileAccentColorId(),
            'old_profile_background_custom_emoji_id' => $this->getOldProfileBackgroundCustomEmojiId(),
            'new_profile_accent_color_id' => $this->getNewProfileAccentColorId(),
            'new_profile_background_custom_emoji_id' => $this->getNewProfileBackgroundCustomEmojiId(),
        ];
    }
}
