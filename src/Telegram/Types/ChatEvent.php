<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a chat event.
 */
class ChatEvent implements \JsonSerializable
{
    public function __construct(
        /** Chat event identifier */
        #[SerializedName('id')]
        private int $id,
        /** Point in time (Unix timestamp) when the event happened */
        #[SerializedName('date')]
        private int $date,
        /** Identifier of the user or chat who performed the action */
        #[SerializedName('member_id')]
        private MessageSender|null $memberId = null,
        /** The action */
        #[SerializedName('action')]
        private ChatEventAction|null $action = null,
    ) {
    }

    /**
     * Get Chat event identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Chat event identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the event happened.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the event happened.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Identifier of the user or chat who performed the action.
     */
    public function getMemberId(): MessageSender|null
    {
        return $this->memberId;
    }

    /**
     * Set Identifier of the user or chat who performed the action.
     */
    public function setMemberId(MessageSender|null $memberId): self
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get The action.
     */
    public function getAction(): ChatEventAction|null
    {
        return $this->action;
    }

    /**
     * Set The action.
     */
    public function setAction(ChatEventAction|null $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEvent',
            'id' => $this->getId(),
            'date' => $this->getDate(),
            'member_id' => $this->getMemberId(),
            'action' => $this->getAction(),
        ];
    }
}
