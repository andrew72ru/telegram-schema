<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a link to a message or a forum topic in a chat.
 */
class MessageLinkInfo implements \JsonSerializable
{
    public function __construct(
        /** True, if the link is a public link for a message or a forum topic in a chat */
        #[SerializedName('is_public')]
        private bool $isPublic,
        /** If found, identifier of the chat to which the link points, 0 otherwise */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** If found, identifier of the message thread in which to open the message, or a forum topic to open if the message is missing */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** If found, the linked message; may be null */
        #[SerializedName('message')]
        private Message|null $message = null,
        /** Timestamp from which the video/audio/video note/voice note/story playing must start, in seconds; 0 if not specified. The media can be in the message content or in its link preview */
        #[SerializedName('media_timestamp')]
        private int $mediaTimestamp,
        /** True, if the whole media album to which the message belongs is linked */
        #[SerializedName('for_album')]
        private bool $forAlbum,
    ) {
    }

    /**
     * Get True, if the link is a public link for a message or a forum topic in a chat.
     */
    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    /**
     * Set True, if the link is a public link for a message or a forum topic in a chat.
     */
    public function setIsPublic(bool $isPublic): self
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get If found, identifier of the chat to which the link points, 0 otherwise.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set If found, identifier of the chat to which the link points, 0 otherwise.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get If found, identifier of the message thread in which to open the message, or a forum topic to open if the message is missing.
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set If found, identifier of the message thread in which to open the message, or a forum topic to open if the message is missing.
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get If found, the linked message; may be null.
     */
    public function getMessage(): Message|null
    {
        return $this->message;
    }

    /**
     * Set If found, the linked message; may be null.
     */
    public function setMessage(Message|null $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get Timestamp from which the video/audio/video note/voice note/story playing must start, in seconds; 0 if not specified. The media can be in the message content or in its link preview.
     */
    public function getMediaTimestamp(): int
    {
        return $this->mediaTimestamp;
    }

    /**
     * Set Timestamp from which the video/audio/video note/voice note/story playing must start, in seconds; 0 if not specified. The media can be in the message content or in its link preview.
     */
    public function setMediaTimestamp(int $mediaTimestamp): self
    {
        $this->mediaTimestamp = $mediaTimestamp;

        return $this;
    }

    /**
     * Get True, if the whole media album to which the message belongs is linked.
     */
    public function getForAlbum(): bool
    {
        return $this->forAlbum;
    }

    /**
     * Set True, if the whole media album to which the message belongs is linked.
     */
    public function setForAlbum(bool $forAlbum): self
    {
        $this->forAlbum = $forAlbum;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageLinkInfo',
            'is_public' => $this->getIsPublic(),
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'message' => $this->getMessage(),
            'media_timestamp' => $this->getMediaTimestamp(),
            'for_album' => $this->getForAlbum(),
        ];
    }
}
