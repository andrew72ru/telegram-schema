<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends 2-10 messages grouped together into an album. Currently, only audio, document, photo and video messages can be grouped into an album.
 */
class SendMessageAlbum extends Messages implements \JsonSerializable
{
    public function __construct(
        /** Target chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** If not 0, the message thread identifier in which the messages will be sent */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** Information about the message or story to be replied; pass null if none */
        #[SerializedName('reply_to')]
        private InputMessageReplyTo|null $replyTo = null,
        /** Options to be used to send the messages; pass null to use default options */
        #[SerializedName('options')]
        private MessageSendOptions|null $options = null,
        /** Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media */
        #[SerializedName('input_message_contents')]
        private array|null $inputMessageContents = null,
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
     * Get If not 0, the message thread identifier in which the messages will be sent.
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set If not 0, the message thread identifier in which the messages will be sent.
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
     * Get Options to be used to send the messages; pass null to use default options.
     */
    public function getOptions(): MessageSendOptions|null
    {
        return $this->options;
    }

    /**
     * Set Options to be used to send the messages; pass null to use default options.
     */
    public function setOptions(MessageSendOptions|null $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media.
     */
    public function getInputMessageContents(): array|null
    {
        return $this->inputMessageContents;
    }

    /**
     * Set Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media.
     */
    public function setInputMessageContents(array|null $inputMessageContents): self
    {
        $this->inputMessageContents = $inputMessageContents;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendMessageAlbum',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'reply_to' => $this->getReplyTo(),
            'options' => $this->getOptions(),
            'input_message_contents' => $this->getInputMessageContents(),
        ];
    }
}
