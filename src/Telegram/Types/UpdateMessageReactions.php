<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reactions added to a message with anonymous reactions have changed; for bots only
 */
class UpdateMessageReactions extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Point in time (Unix timestamp) when the reactions were changed */
        #[SerializedName('date')]
        private int $date,
        /** The list of reactions added to the message */
        #[SerializedName('reactions')]
        private array|null $reactions = null,
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
     * Get Message identifier
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the reactions were changed
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the reactions were changed
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get The list of reactions added to the message
     */
    public function getReactions(): array|null
    {
        return $this->reactions;
    }

    /**
     * Set The list of reactions added to the message
     */
    public function setReactions(array|null $reactions): self
    {
        $this->reactions = $reactions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageReactions',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'date' => $this->getDate(),
            'reactions' => $this->getReactions(),
        ];
    }
}
