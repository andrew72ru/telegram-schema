<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat was blocked or unblocked @chat_id Chat identifier @block_list Block list to which the chat is added; may be null if none
 */
class UpdateChatBlockList extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('block_list')]
        private BlockList|null $blockList = null,
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

    public function getBlockList(): BlockList|null
    {
        return $this->blockList;
    }

    public function setBlockList(BlockList|null $blockList): self
    {
        $this->blockList = $blockList;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatBlockList',
            'chat_id' => $this->getChatId(),
            'block_list' => $this->getBlockList(),
        ];
    }
}
