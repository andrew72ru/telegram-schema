<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes all messages in a Saved Messages topic @saved_messages_topic_id Identifier of Saved Messages topic which messages will be deleted.
 */
class DeleteSavedMessagesTopicHistory extends Ok implements \JsonSerializable
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
            '@type' => 'deleteSavedMessagesTopicHistory',
            'saved_messages_topic_id' => $this->getSavedMessagesTopicId(),
        ];
    }
}
