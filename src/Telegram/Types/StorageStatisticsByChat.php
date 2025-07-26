<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains the storage usage statistics for a specific chat
 */
class StorageStatisticsByChat implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier; 0 if none */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Total size of the files in the chat, in bytes */
        #[SerializedName('size')]
        private int $size,
        /** Total number of files in the chat */
        #[SerializedName('count')]
        private int $count,
        /** Statistics split by file types */
        #[SerializedName('by_file_type')]
        private array|null $byFileType = null,
    ) {
    }

    /**
     * Get Chat identifier; 0 if none
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier; 0 if none
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Total size of the files in the chat, in bytes
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Set Total size of the files in the chat, in bytes
     */
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get Total number of files in the chat
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Set Total number of files in the chat
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get Statistics split by file types
     */
    public function getByFileType(): array|null
    {
        return $this->byFileType;
    }

    /**
     * Set Statistics split by file types
     */
    public function setByFileType(array|null $byFileType): self
    {
        $this->byFileType = $byFileType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storageStatisticsByChat',
            'chat_id' => $this->getChatId(),
            'size' => $this->getSize(),
            'count' => $this->getCount(),
            'by_file_type' => $this->getByFileType(),
        ];
    }
}
