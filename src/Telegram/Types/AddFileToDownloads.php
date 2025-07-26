<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a file from a message to the list of file downloads. Download progress and completion of the download will be notified through updateFile updates.
 */
class AddFileToDownloads extends File implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the file to download */
        #[SerializedName('file_id')]
        private int $fileId,
        /** Chat identifier of the message with the file */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Priority of the download (1-32). The higher the priority, the earlier the file will be downloaded. If the priorities of two files are equal, then the last one for which downloadFile/addFileToDownloads was called will be downloaded first */
        #[SerializedName('priority')]
        private int $priority,
    ) {
    }

    /**
     * Get Identifier of the file to download
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * Set Identifier of the file to download
     */
    public function setFileId(int $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Get Chat identifier of the message with the file
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the message with the file
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message identifier
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Priority of the download (1-32). The higher the priority, the earlier the file will be downloaded. If the priorities of two files are equal, then the last one for which downloadFile/addFileToDownloads was called will be downloaded first
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * Set Priority of the download (1-32). The higher the priority, the earlier the file will be downloaded. If the priorities of two files are equal, then the last one for which downloadFile/addFileToDownloads was called will be downloaded first
     */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addFileToDownloads',
            'file_id' => $this->getFileId(),
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'priority' => $this->getPriority(),
        ];
    }
}
