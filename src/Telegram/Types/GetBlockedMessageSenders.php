<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns users and chats that were blocked by the current user.
 */
class GetBlockedMessageSenders extends MessageSenders implements \JsonSerializable
{
    public function __construct(
        /** Block list from which to return users */
        #[SerializedName('block_list')]
        private BlockList|null $blockList = null,
        /** Number of users and chats to skip in the result; must be non-negative */
        #[SerializedName('offset')]
        private int $offset,
        /** The maximum number of users and chats to return; up to 100 */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Block list from which to return users.
     */
    public function getBlockList(): BlockList|null
    {
        return $this->blockList;
    }

    /**
     * Set Block list from which to return users.
     */
    public function setBlockList(BlockList|null $blockList): self
    {
        $this->blockList = $blockList;

        return $this;
    }

    /**
     * Get Number of users and chats to skip in the result; must be non-negative.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set Number of users and chats to skip in the result; must be non-negative.
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of users and chats to return; up to 100.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of users and chats to return; up to 100.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBlockedMessageSenders',
            'block_list' => $this->getBlockList(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
