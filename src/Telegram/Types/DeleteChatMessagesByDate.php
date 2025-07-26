<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes all messages between the specified dates in a chat. Supported only for private chats and basic groups. Messages sent in the last 30 seconds will not be deleted
 */
class DeleteChatMessagesByDate extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The minimum date of the messages to delete */
        #[SerializedName('min_date')]
        private int $minDate,
        /** The maximum date of the messages to delete */
        #[SerializedName('max_date')]
        private int $maxDate,
        /** Pass true to delete chat messages for all users; private chats only */
        #[SerializedName('revoke')]
        private bool $revoke,
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
     * Get The minimum date of the messages to delete
     */
    public function getMinDate(): int
    {
        return $this->minDate;
    }

    /**
     * Set The minimum date of the messages to delete
     */
    public function setMinDate(int $minDate): self
    {
        $this->minDate = $minDate;

        return $this;
    }

    /**
     * Get The maximum date of the messages to delete
     */
    public function getMaxDate(): int
    {
        return $this->maxDate;
    }

    /**
     * Set The maximum date of the messages to delete
     */
    public function setMaxDate(int $maxDate): self
    {
        $this->maxDate = $maxDate;

        return $this;
    }

    /**
     * Get Pass true to delete chat messages for all users; private chats only
     */
    public function getRevoke(): bool
    {
        return $this->revoke;
    }

    /**
     * Set Pass true to delete chat messages for all users; private chats only
     */
    public function setRevoke(bool $revoke): self
    {
        $this->revoke = $revoke;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteChatMessagesByDate',
            'chat_id' => $this->getChatId(),
            'min_date' => $this->getMinDate(),
            'max_date' => $this->getMaxDate(),
            'revoke' => $this->getRevoke(),
        ];
    }
}
