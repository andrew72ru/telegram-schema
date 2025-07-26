<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that a Web App is being opened from the attachment menu, a botMenuButton button, an internalLinkTypeAttachmentMenuBot link, or an inlineKeyboardButtonTypeWebApp button.
 */
class OpenWebApp extends WebAppInfo implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat in which the Web App is opened. The Web App can't be opened in secret chats */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the bot, providing the Web App. If the bot is restricted for the current user, then show an error instead of calling the method */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** The URL from an inlineKeyboardButtonTypeWebApp button, a botMenuButton button, an internalLinkTypeAttachmentMenuBot link, or an empty string otherwise */
        #[SerializedName('url')]
        private string $url,
        /** If not 0, the message thread identifier to which the message will be sent */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** If not 0, unique identifier of the topic of channel direct messages chat to which the message will be sent */
        #[SerializedName('direct_messages_chat_topic_id')]
        private int $directMessagesChatTopicId,
        /** Information about the message or story to be replied in the message sent by the Web App; pass null if none */
        #[SerializedName('reply_to')]
        private InputMessageReplyTo|null $replyTo = null,
        /** Parameters to use to open the Web App */
        #[SerializedName('parameters')]
        private WebAppOpenParameters|null $parameters = null,
    ) {
    }

    /**
     * Get Identifier of the chat in which the Web App is opened. The Web App can't be opened in secret chats
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat in which the Web App is opened. The Web App can't be opened in secret chats
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the bot, providing the Web App. If the bot is restricted for the current user, then show an error instead of calling the method
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the bot, providing the Web App. If the bot is restricted for the current user, then show an error instead of calling the method
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get The URL from an inlineKeyboardButtonTypeWebApp button, a botMenuButton button, an internalLinkTypeAttachmentMenuBot link, or an empty string otherwise
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set The URL from an inlineKeyboardButtonTypeWebApp button, a botMenuButton button, an internalLinkTypeAttachmentMenuBot link, or an empty string otherwise
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get If not 0, the message thread identifier to which the message will be sent
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set If not 0, the message thread identifier to which the message will be sent
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get If not 0, unique identifier of the topic of channel direct messages chat to which the message will be sent
     */
    public function getDirectMessagesChatTopicId(): int
    {
        return $this->directMessagesChatTopicId;
    }

    /**
     * Set If not 0, unique identifier of the topic of channel direct messages chat to which the message will be sent
     */
    public function setDirectMessagesChatTopicId(int $directMessagesChatTopicId): self
    {
        $this->directMessagesChatTopicId = $directMessagesChatTopicId;

        return $this;
    }

    /**
     * Get Information about the message or story to be replied in the message sent by the Web App; pass null if none
     */
    public function getReplyTo(): InputMessageReplyTo|null
    {
        return $this->replyTo;
    }

    /**
     * Set Information about the message or story to be replied in the message sent by the Web App; pass null if none
     */
    public function setReplyTo(InputMessageReplyTo|null $replyTo): self
    {
        $this->replyTo = $replyTo;

        return $this;
    }

    /**
     * Get Parameters to use to open the Web App
     */
    public function getParameters(): WebAppOpenParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set Parameters to use to open the Web App
     */
    public function setParameters(WebAppOpenParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'openWebApp',
            'chat_id' => $this->getChatId(),
            'bot_user_id' => $this->getBotUserId(),
            'url' => $this->getUrl(),
            'message_thread_id' => $this->getMessageThreadId(),
            'direct_messages_chat_topic_id' => $this->getDirectMessagesChatTopicId(),
            'reply_to' => $this->getReplyTo(),
            'parameters' => $this->getParameters(),
        ];
    }
}
