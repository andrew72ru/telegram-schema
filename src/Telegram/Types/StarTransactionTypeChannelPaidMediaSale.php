<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a sale of paid media by the channel chat; for channel chats only.
 */
class StarTransactionTypeChannelPaidMediaSale extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user that bought the media */
        #[SerializedName('user_id')]
        private int $userId,
        /** Identifier of the corresponding message with paid media; can be 0 or an identifier of a deleted message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The bought media */
        #[SerializedName('media')]
        private array|null $media = null,
    ) {
    }

    /**
     * Get Identifier of the user that bought the media.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user that bought the media.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Identifier of the corresponding message with paid media; can be 0 or an identifier of a deleted message.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the corresponding message with paid media; can be 0 or an identifier of a deleted message.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get The bought media.
     */
    public function getMedia(): array|null
    {
        return $this->media;
    }

    /**
     * Set The bought media.
     */
    public function setMedia(array|null $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeChannelPaidMediaSale',
            'user_id' => $this->getUserId(),
            'message_id' => $this->getMessageId(),
            'media' => $this->getMedia(),
        ];
    }
}
