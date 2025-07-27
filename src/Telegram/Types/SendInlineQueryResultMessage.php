<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends the result of an inline query as a message. Returns the sent message. Always clears a chat draft message.
 */
class SendInlineQueryResultMessage extends Message implements \JsonSerializable
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
        /** Identifier of the inline query */
        #[SerializedName('query_id')]
        private int $queryId,
        /** Identifier of the inline query result */
        #[SerializedName('result_id')]
        private string $resultId,
        /** Pass true to hide the bot, via which the message is sent. Can be used only for bots getOption("animation_search_bot_username"), getOption("photo_search_bot_username"), and getOption("venue_search_bot_username") */
        #[SerializedName('hide_via_bot')]
        private bool $hideViaBot,
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
     * Get Identifier of the inline query.
     */
    public function getQueryId(): int
    {
        return $this->queryId;
    }

    /**
     * Set Identifier of the inline query.
     */
    public function setQueryId(int $queryId): self
    {
        $this->queryId = $queryId;

        return $this;
    }

    /**
     * Get Identifier of the inline query result.
     */
    public function getResultId(): string
    {
        return $this->resultId;
    }

    /**
     * Set Identifier of the inline query result.
     */
    public function setResultId(string $resultId): self
    {
        $this->resultId = $resultId;

        return $this;
    }

    /**
     * Get Pass true to hide the bot, via which the message is sent. Can be used only for bots getOption("animation_search_bot_username"), getOption("photo_search_bot_username"), and getOption("venue_search_bot_username").
     */
    public function getHideViaBot(): bool
    {
        return $this->hideViaBot;
    }

    /**
     * Set Pass true to hide the bot, via which the message is sent. Can be used only for bots getOption("animation_search_bot_username"), getOption("photo_search_bot_username"), and getOption("venue_search_bot_username").
     */
    public function setHideViaBot(bool $hideViaBot): self
    {
        $this->hideViaBot = $hideViaBot;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendInlineQueryResultMessage',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'reply_to' => $this->getReplyTo(),
            'options' => $this->getOptions(),
            'query_id' => $this->getQueryId(),
            'result_id' => $this->getResultId(),
            'hide_via_bot' => $this->getHideViaBot(),
        ];
    }
}
