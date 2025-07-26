<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes all messages between the specified dates in a Saved Messages topic. Messages sent in the last 30 seconds will not be deleted
 */
class DeleteSavedMessagesTopicMessagesByDate extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of Saved Messages topic which messages will be deleted */
        #[SerializedName('saved_messages_topic_id')]
        private int $savedMessagesTopicId,
        /** The minimum date of the messages to delete */
        #[SerializedName('min_date')]
        private int $minDate,
        /** The maximum date of the messages to delete */
        #[SerializedName('max_date')]
        private int $maxDate,
    ) {
    }

    /**
     * Get Identifier of Saved Messages topic which messages will be deleted
     */
    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    /**
     * Set Identifier of Saved Messages topic which messages will be deleted
     */
    public function setSavedMessagesTopicId(int $savedMessagesTopicId): self
    {
        $this->savedMessagesTopicId = $savedMessagesTopicId;

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
            '@type' => 'deleteSavedMessagesTopicMessagesByDate',
            'saved_messages_topic_id' => $this->getSavedMessagesTopicId(),
            'min_date' => $this->getMinDate(),
            'max_date' => $this->getMaxDate(),
        ];
    }
}
