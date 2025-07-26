<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the last message sent in a Saved Messages topic no later than the specified date
 */
class GetSavedMessagesTopicMessageByDate extends Message implements \JsonSerializable
{
    public function __construct(
        /** Identifier of Saved Messages topic which message will be returned */
        #[SerializedName('saved_messages_topic_id')]
        private int $savedMessagesTopicId,
        /** Point in time (Unix timestamp) relative to which to search for messages */
        #[SerializedName('date')]
        private int $date,
    ) {
    }

    /**
     * Get Identifier of Saved Messages topic which message will be returned
     */
    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    /**
     * Set Identifier of Saved Messages topic which message will be returned
     */
    public function setSavedMessagesTopicId(int $savedMessagesTopicId): self
    {
        $this->savedMessagesTopicId = $savedMessagesTopicId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) relative to which to search for messages
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) relative to which to search for messages
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSavedMessagesTopicMessageByDate',
            'saved_messages_topic_id' => $this->getSavedMessagesTopicId(),
            'date' => $this->getDate(),
        ];
    }
}
