<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the order of pinned Saved Messages topics @saved_messages_topic_ids Identifiers of the new pinned Saved Messages topics
 */
class SetPinnedSavedMessagesTopics extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('saved_messages_topic_ids')]
        private array|null $savedMessagesTopicIds = null,
    ) {
    }

    public function getSavedMessagesTopicIds(): array|null
    {
        return $this->savedMessagesTopicIds;
    }

    public function setSavedMessagesTopicIds(array|null $savedMessagesTopicIds): self
    {
        $this->savedMessagesTopicIds = $savedMessagesTopicIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setPinnedSavedMessagesTopics',
            'saved_messages_topic_ids' => $this->getSavedMessagesTopicIds(),
        ];
    }
}
