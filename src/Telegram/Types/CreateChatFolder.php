<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates new chat folder. Returns information about the created chat folder. There can be up to getOption("chat_folder_count_max") chat folders, but the limit can be increased with Telegram Premium @folder The new chat folder
 */
class CreateChatFolder extends ChatFolderInfo implements \JsonSerializable
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
            '@type' => 'createChatFolder',
            'folder' => $this->getFolder(),
        ];
    }
}
