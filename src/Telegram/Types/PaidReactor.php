<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a user that added paid reactions
 */
class PaidReactor implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user or chat that added the reactions; may be null for anonymous reactors that aren't the current user */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Number of Telegram Stars added */
        #[SerializedName('star_count')]
        private int $starCount,
        /** True, if the reactor is one of the most active reactors; may be false if the reactor is the current user */
        #[SerializedName('is_top')]
        private bool $isTop,
        /** True, if the paid reaction was added by the current user */
        #[SerializedName('is_me')]
        private bool $isMe,
        /** True, if the reactor is anonymous */
        #[SerializedName('is_anonymous')]
        private bool $isAnonymous,
    ) {
    }

    /**
     * Get Identifier of the user or chat that added the reactions; may be null for anonymous reactors that aren't the current user
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the user or chat that added the reactions; may be null for anonymous reactors that aren't the current user
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get Number of Telegram Stars added
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars added
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get True, if the reactor is one of the most active reactors; may be false if the reactor is the current user
     */
    public function getIsTop(): bool
    {
        return $this->isTop;
    }

    /**
     * Set True, if the reactor is one of the most active reactors; may be false if the reactor is the current user
     */
    public function setIsTop(bool $isTop): self
    {
        $this->isTop = $isTop;

        return $this;
    }

    /**
     * Get True, if the paid reaction was added by the current user
     */
    public function getIsMe(): bool
    {
        return $this->isMe;
    }

    /**
     * Set True, if the paid reaction was added by the current user
     */
    public function setIsMe(bool $isMe): self
    {
        $this->isMe = $isMe;

        return $this;
    }

    /**
     * Get True, if the reactor is anonymous
     */
    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * Set True, if the reactor is anonymous
     */
    public function setIsAnonymous(bool $isAnonymous): self
    {
        $this->isAnonymous = $isAnonymous;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paidReactor',
            'sender_id' => $this->getSenderId(),
            'star_count' => $this->getStarCount(),
            'is_top' => $this->getIsTop(),
            'is_me' => $this->getIsMe(),
            'is_anonymous' => $this->getIsAnonymous(),
        ];
    }
}
