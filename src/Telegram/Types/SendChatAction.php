<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a notification about user activity in a chat
 */
class SendChatAction extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** If not 0, the message thread identifier in which the action was performed */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** Unique identifier of business connection on behalf of which to send the request; for bots only */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** The action description; pass null to cancel the currently active action */
        #[SerializedName('action')]
        private ChatAction|null $action = null,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get If not 0, the message thread identifier in which the action was performed
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set If not 0, the message thread identifier in which the action was performed
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get Unique identifier of business connection on behalf of which to send the request; for bots only
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection on behalf of which to send the request; for bots only
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get The action description; pass null to cancel the currently active action
     */
    public function getAction(): ChatAction|null
    {
        return $this->action;
    }

    /**
     * Set The action description; pass null to cancel the currently active action
     */
    public function setAction(ChatAction|null $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendChatAction',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'business_connection_id' => $this->getBusinessConnectionId(),
            'action' => $this->getAction(),
        ];
    }
}
