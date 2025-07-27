<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the pinned state of a Saved Messages topic. There can be up to getOption("pinned_saved_messages_topic_count_max") pinned topics. The limit can be increased with Telegram Premium.
 */
class ToggleSavedMessagesTopicIsPinned extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of Saved Messages topic to pin or unpin */
        #[SerializedName('saved_messages_topic_id')]
        private int $savedMessagesTopicId,
        /** Pass true to pin the topic; pass false to unpin it */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    /**
     * Get Identifier of Saved Messages topic to pin or unpin.
     */
    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    /**
     * Set Identifier of Saved Messages topic to pin or unpin.
     */
    public function setSavedMessagesTopicId(int $savedMessagesTopicId): self
    {
        $this->savedMessagesTopicId = $savedMessagesTopicId;

        return $this;
    }

    /**
     * Get Pass true to pin the topic; pass false to unpin it.
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set Pass true to pin the topic; pass false to unpin it.
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSavedMessagesTopicIsPinned',
            'saved_messages_topic_id' => $this->getSavedMessagesTopicId(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
