<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a list of forum topics
 */
class ForumTopics implements \JsonSerializable
{
    public function __construct(
        /** Approximate total number of forum topics found */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** List of forum topics */
        #[SerializedName('topics')]
        private array|null $topics = null,
        /** Offset date for the next getForumTopics request */
        #[SerializedName('next_offset_date')]
        private int $nextOffsetDate,
        /** Offset message identifier for the next getForumTopics request */
        #[SerializedName('next_offset_message_id')]
        private int $nextOffsetMessageId,
        /** Offset message thread identifier for the next getForumTopics request */
        #[SerializedName('next_offset_message_thread_id')]
        private int $nextOffsetMessageThreadId,
    ) {
    }

    /**
     * Get Approximate total number of forum topics found
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Approximate total number of forum topics found
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get List of forum topics
     */
    public function getTopics(): array|null
    {
        return $this->topics;
    }

    /**
     * Set List of forum topics
     */
    public function setTopics(array|null $topics): self
    {
        $this->topics = $topics;

        return $this;
    }

    /**
     * Get Offset date for the next getForumTopics request
     */
    public function getNextOffsetDate(): int
    {
        return $this->nextOffsetDate;
    }

    /**
     * Set Offset date for the next getForumTopics request
     */
    public function setNextOffsetDate(int $nextOffsetDate): self
    {
        $this->nextOffsetDate = $nextOffsetDate;

        return $this;
    }

    /**
     * Get Offset message identifier for the next getForumTopics request
     */
    public function getNextOffsetMessageId(): int
    {
        return $this->nextOffsetMessageId;
    }

    /**
     * Set Offset message identifier for the next getForumTopics request
     */
    public function setNextOffsetMessageId(int $nextOffsetMessageId): self
    {
        $this->nextOffsetMessageId = $nextOffsetMessageId;

        return $this;
    }

    /**
     * Get Offset message thread identifier for the next getForumTopics request
     */
    public function getNextOffsetMessageThreadId(): int
    {
        return $this->nextOffsetMessageThreadId;
    }

    /**
     * Set Offset message thread identifier for the next getForumTopics request
     */
    public function setNextOffsetMessageThreadId(int $nextOffsetMessageThreadId): self
    {
        $this->nextOffsetMessageThreadId = $nextOffsetMessageThreadId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'forumTopics',
            'total_count' => $this->getTotalCount(),
            'topics' => $this->getTopics(),
            'next_offset_date' => $this->getNextOffsetDate(),
            'next_offset_message_id' => $this->getNextOffsetMessageId(),
            'next_offset_message_thread_id' => $this->getNextOffsetMessageThreadId(),
        ];
    }
}
