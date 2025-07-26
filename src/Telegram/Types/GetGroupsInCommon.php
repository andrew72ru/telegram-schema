<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of common group chats with a given user. Chats are sorted by their type and creation date
 */
class GetGroupsInCommon extends Chats implements \JsonSerializable
{
    public function __construct(
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** Chat identifier starting from which to return chats; use 0 for the first request */
        #[SerializedName('offset_chat_id')]
        private int $offsetChatId,
        /** The maximum number of chats to be returned; up to 100 */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get User identifier
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Chat identifier starting from which to return chats; use 0 for the first request
     */
    public function getOffsetChatId(): int
    {
        return $this->offsetChatId;
    }

    /**
     * Set Chat identifier starting from which to return chats; use 0 for the first request
     */
    public function setOffsetChatId(int $offsetChatId): self
    {
        $this->offsetChatId = $offsetChatId;

        return $this;
    }

    /**
     * Get The maximum number of chats to be returned; up to 100
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of chats to be returned; up to 100
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getGroupsInCommon',
            'user_id' => $this->getUserId(),
            'offset_chat_id' => $this->getOffsetChatId(),
            'limit' => $this->getLimit(),
        ];
    }
}
