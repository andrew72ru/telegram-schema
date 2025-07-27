<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a message. Returns the sent message.
 */
class SendMessage extends Message implements \JsonSerializable
{
    public function __construct(
        /** Target chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** If not 0, the message thread identifier in which the message will be sent */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** Information about the message or story to be replied; pass null if none */
        #[SerializedName('reply_to')]
        private InputMessageReplyTo|null $replyTo = null,
        /** Options to be used to send the message; pass null to use default options */
        #[SerializedName('options')]
        private MessageSendOptions|null $options = null,
        /** Markup for replying to the message; pass null if none; for bots only */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The content of the message to be sent */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Target chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Target chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get If not 0, the message thread identifier in which the message will be sent.
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set If not 0, the message thread identifier in which the message will be sent.
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get Information about the message or story to be replied; pass null if none.
     */
    public function getReplyTo(): InputMessageReplyTo|null
    {
        return $this->replyTo;
    }

    /**
     * Set Information about the message or story to be replied; pass null if none.
     */
    public function setReplyTo(InputMessageReplyTo|null $replyTo): self
    {
        $this->replyTo = $replyTo;

        return $this;
    }

    /**
     * Get Options to be used to send the message; pass null to use default options.
     */
    public function getOptions(): MessageSendOptions|null
    {
        return $this->options;
    }

    /**
     * Set Options to be used to send the message; pass null to use default options.
     */
    public function setOptions(MessageSendOptions|null $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get Markup for replying to the message; pass null if none; for bots only.
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set Markup for replying to the message; pass null if none; for bots only.
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get The content of the message to be sent.
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be sent.
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendMessage',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'reply_to' => $this->getReplyTo(),
            'options' => $this->getOptions(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
