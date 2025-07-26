<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns approximate number of chats in a being created chat folder. Main and archive chat lists must be fully preloaded for this function to work correctly @folder The new chat folder
 */
class GetChatFolderChatCount extends Count implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('folder')]
        private ChatFolder|null $folder = null,
    ) {
    }

    public function getFolder(): ChatFolder|null
    {
        return $this->folder;
    }

    public function setFolder(ChatFolder|null $folder): self
    {
        $this->folder = $folder;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatFolderChatCount',
            'folder' => $this->getFolder(),
        ];
    }
}
