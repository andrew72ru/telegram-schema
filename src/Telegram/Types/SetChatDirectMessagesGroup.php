<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes direct messages group settings for a channel chat; requires owner privileges in the chat.
 */
class SetChatDirectMessagesGroup extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the channel chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass true if the direct messages group is enabled for the channel chat; pass false otherwise */
        #[SerializedName('is_enabled')]
        private bool $isEnabled,
        /** The new number of Telegram Stars that must be paid for each message that is sent to the direct messages chat unless the sender is an administrator of the channel chat; 0-getOption("paid_message_star_count_max"). */
        #[SerializedName('paid_message_star_count')]
        private int $paidMessageStarCount,
    ) {
    }

    /**
     * Get Identifier of the channel chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the channel chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass true if the direct messages group is enabled for the channel chat; pass false otherwise.
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     * Set Pass true if the direct messages group is enabled for the channel chat; pass false otherwise.
     */
    public function setIsEnabled(bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get The new number of Telegram Stars that must be paid for each message that is sent to the direct messages chat unless the sender is an administrator of the channel chat; 0-getOption("paid_message_star_count_max")..
     */
    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    /**
     * Set The new number of Telegram Stars that must be paid for each message that is sent to the direct messages chat unless the sender is an administrator of the channel chat; 0-getOption("paid_message_star_count_max")..
     */
    public function setPaidMessageStarCount(int $paidMessageStarCount): self
    {
        $this->paidMessageStarCount = $paidMessageStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatDirectMessagesGroup',
            'chat_id' => $this->getChatId(),
            'is_enabled' => $this->getIsEnabled(),
            'paid_message_star_count' => $this->getPaidMessageStarCount(),
        ];
    }
}
