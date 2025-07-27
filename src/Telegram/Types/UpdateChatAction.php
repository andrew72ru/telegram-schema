<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message sender activity in the chat has changed.
 */
class UpdateChatAction extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** If not 0, the message thread identifier in which the action was performed */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** Identifier of a message sender performing the action */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** The action */
        #[SerializedName('action')]
        private ChatAction|null $action = null,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get If not 0, the message thread identifier in which the action was performed.
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set If not 0, the message thread identifier in which the action was performed.
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get Identifier of a message sender performing the action.
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of a message sender performing the action.
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get The action.
     */
    public function getAction(): ChatAction|null
    {
        return $this->action;
    }

    /**
     * Set The action.
     */
    public function setAction(ChatAction|null $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatAction',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'sender_id' => $this->getSenderId(),
            'action' => $this->getAction(),
        ];
    }
}
