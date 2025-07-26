<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a video chat (a group call bound to a chat). Available only for basic groups, supergroups and channels; requires can_manage_video_chats administrator right
 */
class CreateVideoChat extends GroupCallId implements \JsonSerializable
{
    public function __construct(
        /** Identifier of a chat in which the video chat will be created */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Group call title; if empty, chat title will be used */
        #[SerializedName('title')]
        private string $title,
        /** Point in time (Unix timestamp) when the group call is expected to be started by an administrator; 0 to start the video chat immediately. The date must be at least 10 seconds and at most 8 days in the future */
        #[SerializedName('start_date')]
        private int $startDate,
        /** Pass true to create an RTMP stream instead of an ordinary video chat */
        #[SerializedName('is_rtmp_stream')]
        private bool $isRtmpStream,
    ) {
    }

    /**
     * Get Identifier of a chat in which the video chat will be created
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of a chat in which the video chat will be created
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Group call title; if empty, chat title will be used
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Group call title; if empty, chat title will be used
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the group call is expected to be started by an administrator; 0 to start the video chat immediately. The date must be at least 10 seconds and at most 8 days in the future
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the group call is expected to be started by an administrator; 0 to start the video chat immediately. The date must be at least 10 seconds and at most 8 days in the future
     */
    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get Pass true to create an RTMP stream instead of an ordinary video chat
     */
    public function getIsRtmpStream(): bool
    {
        return $this->isRtmpStream;
    }

    /**
     * Set Pass true to create an RTMP stream instead of an ordinary video chat
     */
    public function setIsRtmpStream(bool $isRtmpStream): self
    {
        $this->isRtmpStream = $isRtmpStream;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createVideoChat',
            'chat_id' => $this->getChatId(),
            'title' => $this->getTitle(),
            'start_date' => $this->getStartDate(),
            'is_rtmp_stream' => $this->getIsRtmpStream(),
        ];
    }
}
