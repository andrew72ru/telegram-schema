<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of chat lists @chat_lists List of chat lists.
 */
class ChatLists implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_lists')]
        private array|null $chatLists = null,
    ) {
    }

    public function getChatLists(): array|null
    {
        return $this->chatLists;
    }

    public function setChatLists(array|null $chatLists): self
    {
        $this->chatLists = $chatLists;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatLists',
            'chat_lists' => $this->getChatLists(),
        ];
    }
}
