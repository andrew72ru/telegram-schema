<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a receiving of a paid reaction to a message by the channel chat; for channel chats only
 */
class StarTransactionTypeChannelPaidReactionReceive extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user that added the paid reaction */
        #[SerializedName('user_id')]
        private int $userId,
        /** Identifier of the reacted message; can be 0 or an identifier of a deleted message */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Identifier of the user that added the paid reaction
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user that added the paid reaction
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Identifier of the reacted message; can be 0 or an identifier of a deleted message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the reacted message; can be 0 or an identifier of a deleted message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeChannelPaidReactionReceive',
            'user_id' => $this->getUserId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
