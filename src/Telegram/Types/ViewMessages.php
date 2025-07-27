<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that messages are being viewed by the user. Sponsored messages must be marked as viewed only when the entire text of the message is shown on the screen (excluding the button).
 */
class ViewMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The identifiers of the messages being viewed */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
        /** Source of the message view; pass null to guess the source based on chat open state */
        #[SerializedName('source')]
        private MessageSource|null $source = null,
        /** Pass true to mark as read the specified messages even if the chat is closed */
        #[SerializedName('force_read')]
        private bool $forceRead,
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
     * Get The identifiers of the messages being viewed.
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set The identifiers of the messages being viewed.
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    /**
     * Get Source of the message view; pass null to guess the source based on chat open state.
     */
    public function getSource(): MessageSource|null
    {
        return $this->source;
    }

    /**
     * Set Source of the message view; pass null to guess the source based on chat open state.
     */
    public function setSource(MessageSource|null $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get Pass true to mark as read the specified messages even if the chat is closed.
     */
    public function getForceRead(): bool
    {
        return $this->forceRead;
    }

    /**
     * Set Pass true to mark as read the specified messages even if the chat is closed.
     */
    public function setForceRead(bool $forceRead): self
    {
        $this->forceRead = $forceRead;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'viewMessages',
            'chat_id' => $this->getChatId(),
            'message_ids' => $this->getMessageIds(),
            'source' => $this->getSource(),
            'force_read' => $this->getForceRead(),
        ];
    }
}
