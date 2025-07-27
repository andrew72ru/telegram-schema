<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains the exact storage usage statistics split by chats and file type.
 */
class StorageStatistics implements \JsonSerializable
{
    public function __construct(
        /** Total size of files, in bytes */
        #[SerializedName('size')]
        private int $size,
        /** Total number of files */
        #[SerializedName('count')]
        private int $count,
        /** Statistics split by chats */
        #[SerializedName('by_chat')]
        private array|null $byChat = null,
    ) {
    }

    /**
     * Get Total size of files, in bytes.
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Set Total size of files, in bytes.
     */
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get Total number of files.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Set Total number of files.
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get Statistics split by chats.
     */
    public function getByChat(): array|null
    {
        return $this->byChat;
    }

    /**
     * Set Statistics split by chats.
     */
    public function setByChat(array|null $byChat): self
    {
        $this->byChat = $byChat;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storageStatistics',
            'size' => $this->getSize(),
            'count' => $this->getCount(),
            'by_chat' => $this->getByChat(),
        ];
    }
}
