<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains statistics about messages sent by a user.
 */
class ChatStatisticsMessageSenderInfo implements \JsonSerializable
{
    public function __construct(
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** Number of sent messages */
        #[SerializedName('sent_message_count')]
        private int $sentMessageCount,
        /** Average number of characters in sent messages; 0 if unknown */
        #[SerializedName('average_character_count')]
        private int $averageCharacterCount,
    ) {
    }

    /**
     * Get User identifier.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Number of sent messages.
     */
    public function getSentMessageCount(): int
    {
        return $this->sentMessageCount;
    }

    /**
     * Set Number of sent messages.
     */
    public function setSentMessageCount(int $sentMessageCount): self
    {
        $this->sentMessageCount = $sentMessageCount;

        return $this;
    }

    /**
     * Get Average number of characters in sent messages; 0 if unknown.
     */
    public function getAverageCharacterCount(): int
    {
        return $this->averageCharacterCount;
    }

    /**
     * Set Average number of characters in sent messages; 0 if unknown.
     */
    public function setAverageCharacterCount(int $averageCharacterCount): self
    {
        $this->averageCharacterCount = $averageCharacterCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatStatisticsMessageSenderInfo',
            'user_id' => $this->getUserId(),
            'sent_message_count' => $this->getSentMessageCount(),
            'average_character_count' => $this->getAverageCharacterCount(),
        ];
    }
}
