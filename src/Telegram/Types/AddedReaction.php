<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a reaction applied to a message
 */
class AddedReaction implements \JsonSerializable
{
    public function __construct(
        /** Type of the reaction */
        #[SerializedName('type')]
        private ReactionType|null $type = null,
        /** Identifier of the chat member, applied the reaction */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** True, if the reaction was added by the current user */
        #[SerializedName('is_outgoing')]
        private bool $isOutgoing,
        /** Point in time (Unix timestamp) when the reaction was added */
        #[SerializedName('date')]
        private int $date,
    ) {
    }

    /**
     * Get Type of the reaction
     */
    public function getType(): ReactionType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the reaction
     */
    public function setType(ReactionType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Identifier of the chat member, applied the reaction
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the chat member, applied the reaction
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get True, if the reaction was added by the current user
     */
    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    /**
     * Set True, if the reaction was added by the current user
     */
    public function setIsOutgoing(bool $isOutgoing): self
    {
        $this->isOutgoing = $isOutgoing;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the reaction was added
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the reaction was added
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addedReaction',
            'type' => $this->getType(),
            'sender_id' => $this->getSenderId(),
            'is_outgoing' => $this->getIsOutgoing(),
            'date' => $this->getDate(),
        ];
    }
}
