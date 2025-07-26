<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The can_invite_users permission of a supergroup chat was toggled @can_invite_users New value of can_invite_users permission
 */
class ChatEventInvitesToggled extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('can_invite_users')]
        private bool $canInviteUsers,
    ) {
    }

    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function setCanInviteUsers(bool $canInviteUsers): self
    {
        $this->canInviteUsers = $canInviteUsers;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventInvitesToggled',
            'can_invite_users' => $this->getCanInviteUsers(),
        ];
    }
}
