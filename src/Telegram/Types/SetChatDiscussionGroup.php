<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the discussion group of a channel chat; requires can_change_info administrator right in the channel if it is specified.
 */
class SetChatDiscussionGroup extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the channel chat. Pass 0 to remove a link from the supergroup passed in the second argument to a linked channel chat (requires can_pin_messages member right in the supergroup) */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of a new channel's discussion group. Use 0 to remove the discussion group. Use the method getSuitableDiscussionChats to find all suitable groups. */
        #[SerializedName('discussion_chat_id')]
        private int $discussionChatId,
    ) {
    }

    /**
     * Get Identifier of the channel chat. Pass 0 to remove a link from the supergroup passed in the second argument to a linked channel chat (requires can_pin_messages member right in the supergroup).
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the channel chat. Pass 0 to remove a link from the supergroup passed in the second argument to a linked channel chat (requires can_pin_messages member right in the supergroup).
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of a new channel's discussion group. Use 0 to remove the discussion group. Use the method getSuitableDiscussionChats to find all suitable groups..
     */
    public function getDiscussionChatId(): int
    {
        return $this->discussionChatId;
    }

    /**
     * Set Identifier of a new channel's discussion group. Use 0 to remove the discussion group. Use the method getSuitableDiscussionChats to find all suitable groups..
     */
    public function setDiscussionChatId(int $discussionChatId): self
    {
        $this->discussionChatId = $discussionChatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatDiscussionGroup',
            'chat_id' => $this->getChatId(),
            'discussion_chat_id' => $this->getDiscussionChatId(),
        ];
    }
}
