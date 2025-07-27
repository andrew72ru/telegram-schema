<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes the original details about the gift.
 */
class UpgradedGiftOriginalDetails implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user or the chat that sent the gift; may be null if the gift was private */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Identifier of the user or the chat that received the gift */
        #[SerializedName('receiver_id')]
        private MessageSender|null $receiverId = null,
        /** Message added to the gift */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Point in time (Unix timestamp) when the gift was sent */
        #[SerializedName('date')]
        private int $date,
    ) {
    }

    /**
     * Get Identifier of the user or the chat that sent the gift; may be null if the gift was private.
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the user or the chat that sent the gift; may be null if the gift was private.
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get Identifier of the user or the chat that received the gift.
     */
    public function getReceiverId(): MessageSender|null
    {
        return $this->receiverId;
    }

    /**
     * Set Identifier of the user or the chat that received the gift.
     */
    public function setReceiverId(MessageSender|null $receiverId): self
    {
        $this->receiverId = $receiverId;

        return $this;
    }

    /**
     * Get Message added to the gift.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Message added to the gift.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the gift was sent.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the gift was sent.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradedGiftOriginalDetails',
            'sender_id' => $this->getSenderId(),
            'receiver_id' => $this->getReceiverId(),
            'text' => $this->getText(),
            'date' => $this->getDate(),
        ];
    }
}
