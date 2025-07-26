<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits the media content of a message with a text, an animation, an audio, a document, a photo or a video in a message sent on behalf of a business account; for bots only
 */
class EditBusinessMessageMedia extends BusinessMessage implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection on behalf of which the message was sent */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** The chat the message belongs to */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The new message reply markup; pass null if none; for bots only */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** New content of the message. Must be one of the following types: inputMessageAnimation, inputMessageAudio, inputMessageDocument, inputMessagePhoto or inputMessageVideo */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Unique identifier of business connection on behalf of which the message was sent
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection on behalf of which the message was sent
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get The chat the message belongs to
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The chat the message belongs to
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
     * Get The new message reply markup; pass null if none; for bots only
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The new message reply markup; pass null if none; for bots only
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get New content of the message. Must be one of the following types: inputMessageAnimation, inputMessageAudio, inputMessageDocument, inputMessagePhoto or inputMessageVideo
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set New content of the message. Must be one of the following types: inputMessageAnimation, inputMessageAudio, inputMessageDocument, inputMessagePhoto or inputMessageVideo
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editBusinessMessageMedia',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
