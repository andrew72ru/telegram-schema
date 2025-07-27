<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a local message to a chat. The message is persistent across application restarts only if the message database is used. Returns the added message.
 */
class AddLocalMessage extends Message implements \JsonSerializable
{
    public function __construct(
        /** Target chat; channel direct messages chats aren't supported */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the sender of the message */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Information about the message or story to be replied; pass null if none */
        #[SerializedName('reply_to')]
        private InputMessageReplyTo|null $replyTo = null,
        /** Pass true to disable notification for the message */
        #[SerializedName('disable_notification')]
        private bool $disableNotification,
        /** The content of the message to be added */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Target chat; channel direct messages chats aren't supported.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Target chat; channel direct messages chats aren't supported.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the sender of the message.
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the sender of the message.
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

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
     * Get Pass true to disable notification for the message.
     */
    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    /**
     * Set Pass true to disable notification for the message.
     */
    public function setDisableNotification(bool $disableNotification): self
    {
        $this->disableNotification = $disableNotification;

        return $this;
    }

    /**
     * Get The content of the message to be added.
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be added.
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addLocalMessage',
            'chat_id' => $this->getChatId(),
            'sender_id' => $this->getSenderId(),
            'reply_to' => $this->getReplyTo(),
            'disable_notification' => $this->getDisableNotification(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
