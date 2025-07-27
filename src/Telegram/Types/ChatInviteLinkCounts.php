<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of chat invite link counts @invite_link_counts List of invite link counts.
 */
class ChatInviteLinkCounts implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('invite_link_counts')]
        private array|null $inviteLinkCounts = null,
    ) {
    }

    public function getInviteLinkCounts(): array|null
    {
        return $this->inviteLinkCounts;
    }

    public function setInviteLinkCounts(array|null $inviteLinkCounts): self
    {
        $this->inviteLinkCounts = $inviteLinkCounts;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatInviteLinkCounts',
            'invite_link_counts' => $this->getInviteLinkCounts(),
        ];
    }
}
