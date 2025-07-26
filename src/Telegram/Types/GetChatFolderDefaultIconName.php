<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns default icon name for a folder. Can be called synchronously @folder Chat folder
 */
class GetChatFolderDefaultIconName extends ChatFolderIcon implements \JsonSerializable
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
            '@type' => 'getChatFolderDefaultIconName',
            'folder' => $this->getFolder(),
        ];
    }
}
