<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A fact-check added to a message was changed
 */
class UpdateMessageFactCheck extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The new fact-check */
        #[SerializedName('fact_check')]
        private FactCheck|null $factCheck = null,
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
     * Get The new fact-check
     */
    public function getFactCheck(): FactCheck|null
    {
        return $this->factCheck;
    }

    /**
     * Set The new fact-check
     */
    public function setFactCheck(FactCheck|null $factCheck): self
    {
        $this->factCheck = $factCheck;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageFactCheck',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'fact_check' => $this->getFactCheck(),
        ];
    }
}
