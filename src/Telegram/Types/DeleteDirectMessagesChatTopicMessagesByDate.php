<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes all messages between the specified dates in the topic in a channel direct messages chat administered by the current user. Messages sent in the last 30 seconds will not be deleted
 */
class DeleteDirectMessagesChatTopicMessagesByDate extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the channel direct messages chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the topic which messages will be deleted */
        #[SerializedName('topic_id')]
        private int $topicId,
        /** The minimum date of the messages to delete */
        #[SerializedName('min_date')]
        private int $minDate,
        /** The maximum date of the messages to delete */
        #[SerializedName('max_date')]
        private int $maxDate,
    ) {
    }

    /**
     * Get Chat identifier of the channel direct messages chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the channel direct messages chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the topic which messages will be deleted
     */
    public function getTopicId(): int
    {
        return $this->topicId;
    }

    /**
     * Set Identifier of the topic which messages will be deleted
     */
    public function setTopicId(int $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get The minimum date of the messages to delete
     */
    public function getMinDate(): int
    {
        return $this->minDate;
    }

    /**
     * Set The minimum date of the messages to delete
     */
    public function setMinDate(int $minDate): self
    {
        $this->minDate = $minDate;

        return $this;
    }

    /**
     * Get The maximum date of the messages to delete
     */
    public function getMaxDate(): int
    {
        return $this->maxDate;
    }

    /**
     * Set The maximum date of the messages to delete
     */
    public function setMaxDate(int $maxDate): self
    {
        $this->maxDate = $maxDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteDirectMessagesChatTopicMessagesByDate',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
            'min_date' => $this->getMinDate(),
            'max_date' => $this->getMaxDate(),
        ];
    }
}
