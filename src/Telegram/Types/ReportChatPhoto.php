<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reports a chat photo to the Telegram moderators. A chat photo can be reported only if chat.can_be_reported
 */
class ReportChatPhoto extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the photo to report. Only full photos from chatPhoto can be reported */
        #[SerializedName('file_id')]
        private int $fileId,
        /** The reason for reporting the chat photo */
        #[SerializedName('reason')]
        private ReportReason|null $reason = null,
        /** Additional report details; 0-1024 characters */
        #[SerializedName('text')]
        private string $text,
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
     * Get Identifier of the photo to report. Only full photos from chatPhoto can be reported
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * Set Identifier of the photo to report. Only full photos from chatPhoto can be reported
     */
    public function setFileId(int $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Get The reason for reporting the chat photo
     */
    public function getReason(): ReportReason|null
    {
        return $this->reason;
    }

    /**
     * Set The reason for reporting the chat photo
     */
    public function setReason(ReportReason|null $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get Additional report details; 0-1024 characters
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set Additional report details; 0-1024 characters
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportChatPhoto',
            'chat_id' => $this->getChatId(),
            'file_id' => $this->getFileId(),
            'reason' => $this->getReason(),
            'text' => $this->getText(),
        ];
    }
}
