<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits title and icon of a topic in a forum supergroup chat; requires can_manage_topics right in the supergroup unless the user is creator of the topic.
 */
class EditForumTopic extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message thread identifier of the forum topic */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** New name of the topic; 0-128 characters. If empty, the previous topic name is kept */
        #[SerializedName('name')]
        private string $name,
        /** Pass true to edit the icon of the topic. Icon of the General topic can't be edited */
        #[SerializedName('edit_icon_custom_emoji')]
        private bool $editIconCustomEmoji,
        /** Identifier of the new custom emoji for topic icon; pass 0 to remove the custom emoji. Ignored if edit_icon_custom_emoji is false. Telegram Premium users can use any custom emoji, other users can use only a custom emoji returned by getForumTopicDefaultIcons */
        #[SerializedName('icon_custom_emoji_id')]
        private int $iconCustomEmojiId,
    ) {
    }

    /**
     * Get Identifier of the chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message thread identifier of the forum topic.
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set Message thread identifier of the forum topic.
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get New name of the topic; 0-128 characters. If empty, the previous topic name is kept.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set New name of the topic; 0-128 characters. If empty, the previous topic name is kept.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Pass true to edit the icon of the topic. Icon of the General topic can't be edited.
     */
    public function getEditIconCustomEmoji(): bool
    {
        return $this->editIconCustomEmoji;
    }

    /**
     * Set Pass true to edit the icon of the topic. Icon of the General topic can't be edited.
     */
    public function setEditIconCustomEmoji(bool $editIconCustomEmoji): self
    {
        $this->editIconCustomEmoji = $editIconCustomEmoji;

        return $this;
    }

    /**
     * Get Identifier of the new custom emoji for topic icon; pass 0 to remove the custom emoji. Ignored if edit_icon_custom_emoji is false. Telegram Premium users can use any custom emoji, other users can use only a custom emoji returned by getForumTopicDefaultIcons.
     */
    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }

    /**
     * Set Identifier of the new custom emoji for topic icon; pass 0 to remove the custom emoji. Ignored if edit_icon_custom_emoji is false. Telegram Premium users can use any custom emoji, other users can use only a custom emoji returned by getForumTopicDefaultIcons.
     */
    public function setIconCustomEmojiId(int $iconCustomEmojiId): self
    {
        $this->iconCustomEmojiId = $iconCustomEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editForumTopic',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'name' => $this->getName(),
            'edit_icon_custom_emoji' => $this->getEditIconCustomEmoji(),
            'icon_custom_emoji_id' => $this->getIconCustomEmojiId(),
        ];
    }
}
