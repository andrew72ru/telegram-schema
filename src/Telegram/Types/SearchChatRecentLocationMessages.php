<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about the recent locations of chat members that were sent to the chat. Returns up to 1 location message per user @chat_id Chat identifier @limit The maximum number of messages to be returned
 */
class SearchChatRecentLocationMessages extends Messages implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchChatRecentLocationMessages',
            'chat_id' => $this->getChatId(),
            'limit' => $this->getLimit(),
        ];
    }
}
