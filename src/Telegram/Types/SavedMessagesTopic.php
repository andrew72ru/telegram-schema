<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a Saved Messages topic.
 */
class SavedMessagesTopic implements \JsonSerializable
{
    public function __construct(
        /** Unique topic identifier */
        #[SerializedName('id')]
        private int $id,
        /** Type of the topic */
        #[SerializedName('type')]
        private SavedMessagesTopicType|null $type = null,
        /** True, if the topic is pinned */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
        /** A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order */
        #[SerializedName('order')]
        private int $order,
        /** Last message in the topic; may be null if none or unknown */
        #[SerializedName('last_message')]
        private Message|null $lastMessage = null,
        /** A draft of a message in the topic; may be null if none */
        #[SerializedName('draft_message')]
        private DraftMessage|null $draftMessage = null,
    ) {
    }

    /**
     * Get Unique topic identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique topic identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Type of the topic.
     */
    public function getType(): SavedMessagesTopicType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the topic.
     */
    public function setType(SavedMessagesTopicType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get True, if the topic is pinned.
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set True, if the topic is pinned.
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    /**
     * Get A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order.
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * Set A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order.
     */
    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get Last message in the topic; may be null if none or unknown.
     */
    public function getLastMessage(): Message|null
    {
        return $this->lastMessage;
    }

    /**
     * Set Last message in the topic; may be null if none or unknown.
     */
    public function setLastMessage(Message|null $lastMessage): self
    {
        $this->lastMessage = $lastMessage;

        return $this;
    }

    /**
     * Get A draft of a message in the topic; may be null if none.
     */
    public function getDraftMessage(): DraftMessage|null
    {
        return $this->draftMessage;
    }

    /**
     * Set A draft of a message in the topic; may be null if none.
     */
    public function setDraftMessage(DraftMessage|null $draftMessage): self
    {
        $this->draftMessage = $draftMessage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'savedMessagesTopic',
            'id' => $this->getId(),
            'type' => $this->getType(),
            'is_pinned' => $this->getIsPinned(),
            'order' => $this->getOrder(),
            'last_message' => $this->getLastMessage(),
            'draft_message' => $this->getDraftMessage(),
        ];
    }
}
