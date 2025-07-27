<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks whether the current user can post a story on behalf of a chat; requires can_post_stories right for supergroup and channel chats.
 */
class CanPostStory extends CanPostStoryResult implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier. Pass Saved Messages chat identifier when posting a story on behalf of the current user */
        #[SerializedName('chat_id')]
        private int $chatId,
    ) {
    }

    /**
     * Get Chat identifier. Pass Saved Messages chat identifier when posting a story on behalf of the current user.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier. Pass Saved Messages chat identifier when posting a story on behalf of the current user.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canPostStory',
            'chat_id' => $this->getChatId(),
        ];
    }
}
