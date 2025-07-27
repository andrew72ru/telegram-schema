<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat accent color or background custom emoji were changed.
 */
class ChatEventAccentColorChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        /** Previous identifier of chat accent color */
        #[SerializedName('old_accent_color_id')]
        private int $oldAccentColorId,
        /** Previous identifier of the custom emoji; 0 if none */
        #[SerializedName('old_background_custom_emoji_id')]
        private int $oldBackgroundCustomEmojiId,
        /** New identifier of chat accent color */
        #[SerializedName('new_accent_color_id')]
        private int $newAccentColorId,
        /** New identifier of the custom emoji; 0 if none */
        #[SerializedName('new_background_custom_emoji_id')]
        private int $newBackgroundCustomEmojiId,
    ) {
    }

    /**
     * Get Previous identifier of chat accent color.
     */
    public function getOldAccentColorId(): int
    {
        return $this->oldAccentColorId;
    }

    /**
     * Set Previous identifier of chat accent color.
     */
    public function setOldAccentColorId(int $oldAccentColorId): self
    {
        $this->oldAccentColorId = $oldAccentColorId;

        return $this;
    }

    /**
     * Get Previous identifier of the custom emoji; 0 if none.
     */
    public function getOldBackgroundCustomEmojiId(): int
    {
        return $this->oldBackgroundCustomEmojiId;
    }

    /**
     * Set Previous identifier of the custom emoji; 0 if none.
     */
    public function setOldBackgroundCustomEmojiId(int $oldBackgroundCustomEmojiId): self
    {
        $this->oldBackgroundCustomEmojiId = $oldBackgroundCustomEmojiId;

        return $this;
    }

    /**
     * Get New identifier of chat accent color.
     */
    public function getNewAccentColorId(): int
    {
        return $this->newAccentColorId;
    }

    /**
     * Set New identifier of chat accent color.
     */
    public function setNewAccentColorId(int $newAccentColorId): self
    {
        $this->newAccentColorId = $newAccentColorId;

        return $this;
    }

    /**
     * Get New identifier of the custom emoji; 0 if none.
     */
    public function getNewBackgroundCustomEmojiId(): int
    {
        return $this->newBackgroundCustomEmojiId;
    }

    /**
     * Set New identifier of the custom emoji; 0 if none.
     */
    public function setNewBackgroundCustomEmojiId(int $newBackgroundCustomEmojiId): self
    {
        $this->newBackgroundCustomEmojiId = $newBackgroundCustomEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventAccentColorChanged',
            'old_accent_color_id' => $this->getOldAccentColorId(),
            'old_background_custom_emoji_id' => $this->getOldBackgroundCustomEmojiId(),
            'new_accent_color_id' => $this->getNewAccentColorId(),
            'new_background_custom_emoji_id' => $this->getNewBackgroundCustomEmojiId(),
        ];
    }
}
