<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the last message sent in a chat no later than the specified date. Returns a 404 error if such message doesn't exist
 */
class GetChatMessageByDate extends Message implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Point in time (Unix timestamp) relative to which to search for messages */
        #[SerializedName('date')]
        private int $date,
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
     * Get Point in time (Unix timestamp) relative to which to search for messages
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) relative to which to search for messages
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatMessageByDate',
            'chat_id' => $this->getChatId(),
            'date' => $this->getDate(),
        ];
    }
}
