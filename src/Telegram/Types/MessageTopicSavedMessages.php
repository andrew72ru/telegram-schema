<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A topic in Saved Messages chat @saved_messages_topic_id Unique identifier of the Saved Messages topic
 */
class MessageTopicSavedMessages extends MessageTopic implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('saved_messages_topic_id')]
        private int $savedMessagesTopicId,
    ) {
    }

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function setSavedMessagesTopicId(int $savedMessagesTopicId): self
    {
        $this->savedMessagesTopicId = $savedMessagesTopicId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageTopicSavedMessages',
            'saved_messages_topic_id' => $this->getSavedMessagesTopicId(),
        ];
    }
}
