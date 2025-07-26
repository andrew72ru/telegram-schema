<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of chat folder invite links @invite_links List of the invite links
 */
class ChatFolderInviteLinks implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('invite_links')]
        private array|null $inviteLinks = null,
    ) {
    }

    public function getInviteLinks(): array|null
    {
        return $this->inviteLinks;
    }

    public function setInviteLinks(array|null $inviteLinks): self
    {
        $this->inviteLinks = $inviteLinks;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatFolderInviteLinks',
            'invite_links' => $this->getInviteLinks(),
        ];
    }
}
