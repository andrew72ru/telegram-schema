<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes existing chat folder @chat_folder_id Chat folder identifier @leave_chat_ids Identifiers of the chats to leave. The chats must be pinned or always included in the folder.
 */
class DeleteChatFolder extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_folder_id')]
        private int $chatFolderId,
        #[SerializedName('leave_chat_ids')]
        private array|null $leaveChatIds = null,
    ) {
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function setChatFolderId(int $chatFolderId): self
    {
        $this->chatFolderId = $chatFolderId;

        return $this;
    }

    public function getLeaveChatIds(): array|null
    {
        return $this->leaveChatIds;
    }

    public function setLeaveChatIds(array|null $leaveChatIds): self
    {
        $this->leaveChatIds = $leaveChatIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteChatFolder',
            'chat_folder_id' => $this->getChatFolderId(),
            'leave_chat_ids' => $this->getLeaveChatIds(),
        ];
    }
}
