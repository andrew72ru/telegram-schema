<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Rates recognized speech in a video note or a voice note message @chat_id Identifier of the chat to which the message belongs @message_id Identifier of the message @is_good Pass true if the speech recognition is good.
 */
class RateSpeechRecognition extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_id')]
        private int $messageId,
        #[SerializedName('is_good')]
        private bool $isGood,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function getIsGood(): bool
    {
        return $this->isGood;
    }

    public function setIsGood(bool $isGood): self
    {
        $this->isGood = $isGood;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'rateSpeechRecognition',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'is_good' => $this->getIsGood(),
        ];
    }
}
