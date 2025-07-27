<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A forum topic has been edited.
 */
class MessageForumTopicEdited extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** If non-empty, the new name of the topic */
        #[SerializedName('name')]
        private string $name,
        /** True, if icon's custom_emoji_id is changed */
        #[SerializedName('edit_icon_custom_emoji_id')]
        private bool $editIconCustomEmojiId,
        /** New unique identifier of the custom emoji shown on the topic icon; 0 if none. Must be ignored if edit_icon_custom_emoji_id is false */
        #[SerializedName('icon_custom_emoji_id')]
        private int $iconCustomEmojiId,
    ) {
    }

    /**
     * Get If non-empty, the new name of the topic.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set If non-empty, the new name of the topic.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get True, if icon's custom_emoji_id is changed.
     */
    public function getEditIconCustomEmojiId(): bool
    {
        return $this->editIconCustomEmojiId;
    }

    /**
     * Set True, if icon's custom_emoji_id is changed.
     */
    public function setEditIconCustomEmojiId(bool $editIconCustomEmojiId): self
    {
        $this->editIconCustomEmojiId = $editIconCustomEmojiId;

        return $this;
    }

    /**
     * Get New unique identifier of the custom emoji shown on the topic icon; 0 if none. Must be ignored if edit_icon_custom_emoji_id is false.
     */
    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }

    /**
     * Set New unique identifier of the custom emoji shown on the topic icon; 0 if none. Must be ignored if edit_icon_custom_emoji_id is false.
     */
    public function setIconCustomEmojiId(int $iconCustomEmojiId): self
    {
        $this->iconCustomEmojiId = $iconCustomEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageForumTopicEdited',
            'name' => $this->getName(),
            'edit_icon_custom_emoji_id' => $this->getEditIconCustomEmojiId(),
            'icon_custom_emoji_id' => $this->getIconCustomEmojiId(),
        ];
    }
}
