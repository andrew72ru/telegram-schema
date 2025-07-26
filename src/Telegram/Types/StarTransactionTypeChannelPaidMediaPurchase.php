<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a purchase of paid media from a channel by the current user; for regular users only
 */
class StarTransactionTypeChannelPaidMediaPurchase extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the channel chat that sent the paid media */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the corresponding message with paid media; can be 0 or an identifier of a deleted message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The bought media if the transaction wasn't refunded */
        #[SerializedName('media')]
        private array|null $media = null,
    ) {
    }

    /**
     * Get Identifier of the channel chat that sent the paid media
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the channel chat that sent the paid media
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the corresponding message with paid media; can be 0 or an identifier of a deleted message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the corresponding message with paid media; can be 0 or an identifier of a deleted message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get The bought media if the transaction wasn't refunded
     */
    public function getMedia(): array|null
    {
        return $this->media;
    }

    /**
     * Set The bought media if the transaction wasn't refunded
     */
    public function setMedia(array|null $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeChannelPaidMediaPurchase',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'media' => $this->getMedia(),
        ];
    }
}
