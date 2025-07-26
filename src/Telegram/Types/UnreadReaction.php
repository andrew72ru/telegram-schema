<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about an unread reaction to a message
 */
class UnreadReaction implements \JsonSerializable
{
    public function __construct(
        /** Type of the reaction */
        #[SerializedName('type')]
        private ReactionType|null $type = null,
        /** Identifier of the sender, added the reaction */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** True, if the reaction was added with a big animation */
        #[SerializedName('is_big')]
        private bool $isBig,
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
     * Get Identifier of the sender, added the reaction
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the sender, added the reaction
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get True, if the reaction was added with a big animation
     */
    public function getIsBig(): bool
    {
        return $this->isBig;
    }

    /**
     * Set True, if the reaction was added with a big animation
     */
    public function setIsBig(bool $isBig): self
    {
        $this->isBig = $isBig;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'unreadReaction',
            'type' => $this->getType(),
            'sender_id' => $this->getSenderId(),
            'is_big' => $this->getIsBig(),
        ];
    }
}
