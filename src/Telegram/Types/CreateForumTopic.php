<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a topic in a forum supergroup chat; requires can_manage_topics administrator or can_create_topics member right in the supergroup
 */
class CreateForumTopic extends ForumTopicInfo implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Name of the topic; 1-128 characters */
        #[SerializedName('name')]
        private string $name,
        /** Icon of the topic. Icon color must be one of 0x6FB9F0, 0xFFD67E, 0xCB86DB, 0x8EEE98, 0xFF93B2, or 0xFB6F5F. Telegram Premium users can use any custom emoji as topic icon, other users can use only a custom emoji returned by getForumTopicDefaultIcons */
        #[SerializedName('icon')]
        private ForumTopicIcon|null $icon = null,
    ) {
    }

    /**
     * Get Identifier of the chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Name of the topic; 1-128 characters
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the topic; 1-128 characters
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Icon of the topic. Icon color must be one of 0x6FB9F0, 0xFFD67E, 0xCB86DB, 0x8EEE98, 0xFF93B2, or 0xFB6F5F. Telegram Premium users can use any custom emoji as topic icon, other users can use only a custom emoji returned by getForumTopicDefaultIcons
     */
    public function getIcon(): ForumTopicIcon|null
    {
        return $this->icon;
    }

    /**
     * Set Icon of the topic. Icon color must be one of 0x6FB9F0, 0xFFD67E, 0xCB86DB, 0x8EEE98, 0xFF93B2, or 0xFB6F5F. Telegram Premium users can use any custom emoji as topic icon, other users can use only a custom emoji returned by getForumTopicDefaultIcons
     */
    public function setIcon(ForumTopicIcon|null $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createForumTopic',
            'chat_id' => $this->getChatId(),
            'name' => $this->getName(),
            'icon' => $this->getIcon(),
        ];
    }
}
