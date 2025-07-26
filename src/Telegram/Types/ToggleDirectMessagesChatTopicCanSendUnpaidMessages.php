<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Allows to send unpaid messages to the given topic of the channel direct messages chat administered by the current user
 */
class ToggleDirectMessagesChatTopicCanSendUnpaidMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the topic */
        #[SerializedName('topic_id')]
        private int $topicId,
        /** Pass true to allow unpaid messages; pass false to disallow unpaid messages */
        #[SerializedName('can_send_unpaid_messages')]
        private bool $canSendUnpaidMessages,
        /** Pass true to refund the user previously paid messages */
        #[SerializedName('refund_payments')]
        private bool $refundPayments,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the topic
     */
    public function getTopicId(): int
    {
        return $this->topicId;
    }

    /**
     * Set Identifier of the topic
     */
    public function setTopicId(int $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get Pass true to allow unpaid messages; pass false to disallow unpaid messages
     */
    public function getCanSendUnpaidMessages(): bool
    {
        return $this->canSendUnpaidMessages;
    }

    /**
     * Set Pass true to allow unpaid messages; pass false to disallow unpaid messages
     */
    public function setCanSendUnpaidMessages(bool $canSendUnpaidMessages): self
    {
        $this->canSendUnpaidMessages = $canSendUnpaidMessages;

        return $this;
    }

    /**
     * Get Pass true to refund the user previously paid messages
     */
    public function getRefundPayments(): bool
    {
        return $this->refundPayments;
    }

    /**
     * Set Pass true to refund the user previously paid messages
     */
    public function setRefundPayments(bool $refundPayments): self
    {
        $this->refundPayments = $refundPayments;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleDirectMessagesChatTopicCanSendUnpaidMessages',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
            'can_send_unpaid_messages' => $this->getCanSendUnpaidMessages(),
            'refund_payments' => $this->getRefundPayments(),
        ];
    }
}
