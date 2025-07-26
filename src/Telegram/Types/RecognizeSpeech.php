<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Recognizes speech in a video note or a voice note message
 */
class RecognizeSpeech extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message. Use messageProperties.can_recognize_speech to check whether the message is suitable */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message belongs
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message belongs
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message. Use messageProperties.can_recognize_speech to check whether the message is suitable
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message. Use messageProperties.can_recognize_speech to check whether the message is suitable
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'recognizeSpeech',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
