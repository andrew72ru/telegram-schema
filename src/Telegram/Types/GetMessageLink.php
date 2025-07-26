<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTPS link to a message in a chat. Available only if messageProperties.can_get_link, or if messageProperties.can_get_media_timestamp_links and a media timestamp link is generated. This is an offline method
 */
class GetMessageLink extends MessageLink implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** If not 0, timestamp from which the video/audio/video note/voice note/story playing must start, in seconds. The media can be in the message content or in its link preview */
        #[SerializedName('media_timestamp')]
        private int $mediaTimestamp,
        /** Pass true to create a link for the whole media album */
        #[SerializedName('for_album')]
        private bool $forAlbum,
        /** Pass true to create a link to the message as a channel post comment, in a message thread, or a forum topic */
        #[SerializedName('in_message_thread')]
        private bool $inMessageThread,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message belongs
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message belongs
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
     * Get If not 0, timestamp from which the video/audio/video note/voice note/story playing must start, in seconds. The media can be in the message content or in its link preview
     */
    public function getMediaTimestamp(): int
    {
        return $this->mediaTimestamp;
    }

    /**
     * Set If not 0, timestamp from which the video/audio/video note/voice note/story playing must start, in seconds. The media can be in the message content or in its link preview
     */
    public function setMediaTimestamp(int $mediaTimestamp): self
    {
        $this->mediaTimestamp = $mediaTimestamp;

        return $this;
    }

    /**
     * Get Pass true to create a link for the whole media album
     */
    public function getForAlbum(): bool
    {
        return $this->forAlbum;
    }

    /**
     * Set Pass true to create a link for the whole media album
     */
    public function setForAlbum(bool $forAlbum): self
    {
        $this->forAlbum = $forAlbum;

        return $this;
    }

    /**
     * Get Pass true to create a link to the message as a channel post comment, in a message thread, or a forum topic
     */
    public function getInMessageThread(): bool
    {
        return $this->inMessageThread;
    }

    /**
     * Set Pass true to create a link to the message as a channel post comment, in a message thread, or a forum topic
     */
    public function setInMessageThread(bool $inMessageThread): self
    {
        $this->inMessageThread = $inMessageThread;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessageLink',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'media_timestamp' => $this->getMediaTimestamp(),
            'for_album' => $this->getForAlbum(),
            'in_message_thread' => $this->getInMessageThread(),
        ];
    }
}
