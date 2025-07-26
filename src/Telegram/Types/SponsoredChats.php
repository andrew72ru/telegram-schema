<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of sponsored chats @chats List of sponsored chats
 */
class SponsoredChats implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chats')]
        private array|null $chats = null,
    ) {
    }

    public function getChats(): array|null
    {
        return $this->chats;
    }

    public function setChats(array|null $chats): self
    {
        $this->chats = $chats;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sponsoredChats',
            'chats' => $this->getChats(),
        ];
    }
}
