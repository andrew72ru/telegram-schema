<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns tags used in Saved Messages or a Saved Messages topic
 */
class GetSavedMessagesTags extends SavedMessagesTags implements \JsonSerializable
{
    public function __construct(
        /** Identifier of Saved Messages topic which tags will be returned; pass 0 to get all Saved Messages tags */
        #[SerializedName('saved_messages_topic_id')]
        private int $savedMessagesTopicId,
    ) {
    }

    /**
     * Get Identifier of Saved Messages topic which tags will be returned; pass 0 to get all Saved Messages tags
     */
    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    /**
     * Set Identifier of Saved Messages topic which tags will be returned; pass 0 to get all Saved Messages tags
     */
    public function setSavedMessagesTopicId(int $savedMessagesTopicId): self
    {
        $this->savedMessagesTopicId = $savedMessagesTopicId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSavedMessagesTags',
            'saved_messages_topic_id' => $this->getSavedMessagesTopicId(),
        ];
    }
}
