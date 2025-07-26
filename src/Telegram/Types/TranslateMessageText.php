<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Extracts text or caption of the given message and translates it to the given language. If the current user is a Telegram Premium user, then text formatting is preserved
 */
class TranslateMessageText extends FormattedText implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Language code of the language to which the message is translated. Must be one of */
        #[SerializedName('to_language_code')]
        private string $toLanguageCode,
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
     * Get Identifier of the message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Language code of the language to which the message is translated. Must be one of
     */
    public function getToLanguageCode(): string
    {
        return $this->toLanguageCode;
    }

    /**
     * Set Language code of the language to which the message is translated. Must be one of
     */
    public function setToLanguageCode(string $toLanguageCode): self
    {
        $this->toLanguageCode = $toLanguageCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'translateMessageText',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'to_language_code' => $this->getToLanguageCode(),
        ];
    }
}
