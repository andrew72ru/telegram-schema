<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the order of chat folders @chat_folder_ids Identifiers of chat folders in the new correct order @main_chat_list_position Position of the main chat list among chat folders, 0-based. Can be non-zero only for Premium users
 */
class ReorderChatFolders extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_folder_ids')]
        private array|null $chatFolderIds = null,
        #[SerializedName('main_chat_list_position')]
        private int $mainChatListPosition,
    ) {
    }

    public function getChatFolderIds(): array|null
    {
        return $this->chatFolderIds;
    }

    public function setChatFolderIds(array|null $chatFolderIds): self
    {
        $this->chatFolderIds = $chatFolderIds;

        return $this;
    }

    public function getMainChatListPosition(): int
    {
        return $this->mainChatListPosition;
    }

    public function setMainChatListPosition(int $mainChatListPosition): self
    {
        $this->mainChatListPosition = $mainChatListPosition;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reorderChatFolders',
            'chat_folder_ids' => $this->getChatFolderIds(),
            'main_chat_list_position' => $this->getMainChatListPosition(),
        ];
    }
}
