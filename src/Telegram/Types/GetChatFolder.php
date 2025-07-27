<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a chat folder by its identifier @chat_folder_id Chat folder identifier.
 */
class GetChatFolder extends ChatFolder implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_folder_id')]
        private int $chatFolderId,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatFolder',
            'chat_folder_id' => $this->getChatFolderId(),
        ];
    }
}
