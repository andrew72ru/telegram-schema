<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a reaction to a message
 */
class MessageReaction implements \JsonSerializable
{
    public function __construct(
        /** Type of the reaction */
        #[SerializedName('type')]
        private ReactionType|null $type = null,
        /** Number of times the reaction was added */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** True, if the reaction is chosen by the current user */
        #[SerializedName('is_chosen')]
        private bool $isChosen,
        /** Identifier of the message sender used by the current user to add the reaction; may be null if unknown or the reaction isn't chosen */
        #[SerializedName('used_sender_id')]
        private MessageSender|null $usedSenderId = null,
        /** Identifiers of at most 3 recent message senders, added the reaction; available in private, basic group and supergroup chats */
        #[SerializedName('recent_sender_ids')]
        private array|null $recentSenderIds = null,
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
     * Get Number of times the reaction was added
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Number of times the reaction was added
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get True, if the reaction is chosen by the current user
     */
    public function getIsChosen(): bool
    {
        return $this->isChosen;
    }

    /**
     * Set True, if the reaction is chosen by the current user
     */
    public function setIsChosen(bool $isChosen): self
    {
        $this->isChosen = $isChosen;

        return $this;
    }

    /**
     * Get Identifier of the message sender used by the current user to add the reaction; may be null if unknown or the reaction isn't chosen
     */
    public function getUsedSenderId(): MessageSender|null
    {
        return $this->usedSenderId;
    }

    /**
     * Set Identifier of the message sender used by the current user to add the reaction; may be null if unknown or the reaction isn't chosen
     */
    public function setUsedSenderId(MessageSender|null $usedSenderId): self
    {
        $this->usedSenderId = $usedSenderId;

        return $this;
    }

    /**
     * Get Identifiers of at most 3 recent message senders, added the reaction; available in private, basic group and supergroup chats
     */
    public function getRecentSenderIds(): array|null
    {
        return $this->recentSenderIds;
    }

    /**
     * Set Identifiers of at most 3 recent message senders, added the reaction; available in private, basic group and supergroup chats
     */
    public function setRecentSenderIds(array|null $recentSenderIds): self
    {
        $this->recentSenderIds = $recentSenderIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageReaction',
            'type' => $this->getType(),
            'total_count' => $this->getTotalCount(),
            'is_chosen' => $this->getIsChosen(),
            'used_sender_id' => $this->getUsedSenderId(),
            'recent_sender_ids' => $this->getRecentSenderIds(),
        ];
    }
}
