<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the block list of a message sender. Currently, only users and supergroup chats can be blocked
 */
class SetMessageSenderBlockList extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of a message sender to block/unblock */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** New block list for the message sender; pass null to unblock the message sender */
        #[SerializedName('block_list')]
        private BlockList|null $blockList = null,
    ) {
    }

    /**
     * Get Identifier of a message sender to block/unblock
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of a message sender to block/unblock
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get New block list for the message sender; pass null to unblock the message sender
     */
    public function getBlockList(): BlockList|null
    {
        return $this->blockList;
    }

    /**
     * Set New block list for the message sender; pass null to unblock the message sender
     */
    public function setBlockList(BlockList|null $blockList): self
    {
        $this->blockList = $blockList;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setMessageSenderBlockList',
            'sender_id' => $this->getSenderId(),
            'block_list' => $this->getBlockList(),
        ];
    }
}
