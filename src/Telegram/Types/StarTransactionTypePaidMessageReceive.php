<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a receiving of a paid message; for regular users, supergroup and channel chats only.
 */
class StarTransactionTypePaidMessageReceive extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the sender of the message */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Number of received paid messages */
        #[SerializedName('message_count')]
        private int $messageCount,
        /** The number of Telegram Stars received by the Telegram for each 1000 Telegram Stars paid for message sending */
        #[SerializedName('commission_per_mille')]
        private int $commissionPerMille,
        /** The amount of Telegram Stars that were received by Telegram; can be negative for refunds */
        #[SerializedName('commission_star_amount')]
        private StarAmount|null $commissionStarAmount = null,
    ) {
    }

    /**
     * Get Identifier of the sender of the message.
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the sender of the message.
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get Number of received paid messages.
     */
    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    /**
     * Set Number of received paid messages.
     */
    public function setMessageCount(int $messageCount): self
    {
        $this->messageCount = $messageCount;

        return $this;
    }

    /**
     * Get The number of Telegram Stars received by the Telegram for each 1000 Telegram Stars paid for message sending.
     */
    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    /**
     * Set The number of Telegram Stars received by the Telegram for each 1000 Telegram Stars paid for message sending.
     */
    public function setCommissionPerMille(int $commissionPerMille): self
    {
        $this->commissionPerMille = $commissionPerMille;

        return $this;
    }

    /**
     * Get The amount of Telegram Stars that were received by Telegram; can be negative for refunds.
     */
    public function getCommissionStarAmount(): StarAmount|null
    {
        return $this->commissionStarAmount;
    }

    /**
     * Set The amount of Telegram Stars that were received by Telegram; can be negative for refunds.
     */
    public function setCommissionStarAmount(StarAmount|null $commissionStarAmount): self
    {
        $this->commissionStarAmount = $commissionStarAmount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypePaidMessageReceive',
            'sender_id' => $this->getSenderId(),
            'message_count' => $this->getMessageCount(),
            'commission_per_mille' => $this->getCommissionPerMille(),
            'commission_star_amount' => $this->getCommissionStarAmount(),
        ];
    }
}
