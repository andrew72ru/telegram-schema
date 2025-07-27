<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns storage usage statistics. Can be called before authorization.
 */
class GetStorageStatistics extends StorageStatistics implements \JsonSerializable
{
    public function __construct(
        /** The maximum number of chats with the largest storage usage for which separate statistics need to be returned. All other chats will be grouped in entries with chat_id == 0. If the chat info database is not used, the chat_limit is ignored and is always set to 0 */
        #[SerializedName('chat_limit')]
        private int $chatLimit,
    ) {
    }

    /**
     * Get The maximum number of chats with the largest storage usage for which separate statistics need to be returned. All other chats will be grouped in entries with chat_id == 0. If the chat info database is not used, the chat_limit is ignored and is always set to 0.
     */
    public function getChatLimit(): int
    {
        return $this->chatLimit;
    }

    /**
     * Set The maximum number of chats with the largest storage usage for which separate statistics need to be returned. All other chats will be grouped in entries with chat_id == 0. If the chat info database is not used, the chat_limit is ignored and is always set to 0.
     */
    public function setChatLimit(int $chatLimit): self
    {
        $this->chatLimit = $chatLimit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStorageStatistics',
            'chat_limit' => $this->getChatLimit(),
        ];
    }
}
