<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is under certain restrictions in the chat. Not supported in basic groups and channels.
 */
class ChatMemberStatusRestricted extends ChatMemberStatus implements \JsonSerializable
{
    public function __construct(
        /** True, if the user is a member of the chat */
        #[SerializedName('is_member')]
        private bool $isMember,
        /** Point in time (Unix timestamp) when restrictions will be lifted from the user; 0 if never. If the user is restricted for more than 366 days or for less than 30 seconds from the current time, the user is considered to be restricted forever */
        #[SerializedName('restricted_until_date')]
        private int $restrictedUntilDate,
        /** User permissions in the chat */
        #[SerializedName('permissions')]
        private ChatPermissions|null $permissions = null,
    ) {
    }

    /**
     * Get True, if the user is a member of the chat.
     */
    public function getIsMember(): bool
    {
        return $this->isMember;
    }

    /**
     * Set True, if the user is a member of the chat.
     */
    public function setIsMember(bool $isMember): self
    {
        $this->isMember = $isMember;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when restrictions will be lifted from the user; 0 if never. If the user is restricted for more than 366 days or for less than 30 seconds from the current time, the user is considered to be restricted forever.
     */
    public function getRestrictedUntilDate(): int
    {
        return $this->restrictedUntilDate;
    }

    /**
     * Set Point in time (Unix timestamp) when restrictions will be lifted from the user; 0 if never. If the user is restricted for more than 366 days or for less than 30 seconds from the current time, the user is considered to be restricted forever.
     */
    public function setRestrictedUntilDate(int $restrictedUntilDate): self
    {
        $this->restrictedUntilDate = $restrictedUntilDate;

        return $this;
    }

    /**
     * Get User permissions in the chat.
     */
    public function getPermissions(): ChatPermissions|null
    {
        return $this->permissions;
    }

    /**
     * Set User permissions in the chat.
     */
    public function setPermissions(ChatPermissions|null $permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMemberStatusRestricted',
            'is_member' => $this->getIsMember(),
            'restricted_until_date' => $this->getRestrictedUntilDate(),
            'permissions' => $this->getPermissions(),
        ];
    }
}
