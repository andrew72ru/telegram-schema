<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Tags used in Saved Messages or a Saved Messages topic have changed.
 */
class UpdateSavedMessagesTags extends Update implements \JsonSerializable
{
    public function __construct(
        /** Identifier of Saved Messages topic which tags were changed; 0 if tags for the whole chat has changed */
        #[SerializedName('saved_messages_topic_id')]
        private int $savedMessagesTopicId,
        /** The new tags */
        #[SerializedName('tags')]
        private SavedMessagesTags|null $tags = null,
    ) {
    }

    /**
     * Get Identifier of Saved Messages topic which tags were changed; 0 if tags for the whole chat has changed.
     */
    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    /**
     * Set Identifier of Saved Messages topic which tags were changed; 0 if tags for the whole chat has changed.
     */
    public function setSavedMessagesTopicId(int $savedMessagesTopicId): self
    {
        $this->savedMessagesTopicId = $savedMessagesTopicId;

        return $this;
    }

    /**
     * Get The new tags.
     */
    public function getTags(): SavedMessagesTags|null
    {
        return $this->tags;
    }

    /**
     * Set The new tags.
     */
    public function setTags(SavedMessagesTags|null $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSavedMessagesTags',
            'saved_messages_topic_id' => $this->getSavedMessagesTopicId(),
            'tags' => $this->getTags(),
        ];
    }
}
