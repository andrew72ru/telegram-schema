<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of recommended chat folders @chat_folders List of recommended chat folders
 */
class RecommendedChatFolders implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_folders')]
        private array|null $chatFolders = null,
    ) {
    }

    public function getChatFolders(): array|null
    {
        return $this->chatFolders;
    }

    public function setChatFolders(array|null $chatFolders): self
    {
        $this->chatFolders = $chatFolders;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'recommendedChatFolders',
            'chat_folders' => $this->getChatFolders(),
        ];
    }
}
