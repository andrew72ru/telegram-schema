<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches a public chat by its username. Currently, only private chats, supergroups and channels can be public. Returns the chat if found; otherwise, an error is returned @username Username to be resolved
 */
class SearchPublicChat extends Chat implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('username')]
        private string $username,
    ) {
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchPublicChat',
            'username' => $this->getUsername(),
        ];
    }
}
