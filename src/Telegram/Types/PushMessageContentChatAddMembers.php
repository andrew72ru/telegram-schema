<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * New chat members were invited to a group.
 */
class PushMessageContentChatAddMembers extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Name of the added member */
        #[SerializedName('member_name')]
        private string $memberName,
        /** True, if the current user was added to the group */
        #[SerializedName('is_current_user')]
        private bool $isCurrentUser,
        /** True, if the user has returned to the group themselves */
        #[SerializedName('is_returned')]
        private bool $isReturned,
    ) {
    }

    /**
     * Get Name of the added member.
     */
    public function getMemberName(): string
    {
        return $this->memberName;
    }

    /**
     * Set Name of the added member.
     */
    public function setMemberName(string $memberName): self
    {
        $this->memberName = $memberName;

        return $this;
    }

    /**
     * Get True, if the current user was added to the group.
     */
    public function getIsCurrentUser(): bool
    {
        return $this->isCurrentUser;
    }

    /**
     * Set True, if the current user was added to the group.
     */
    public function setIsCurrentUser(bool $isCurrentUser): self
    {
        $this->isCurrentUser = $isCurrentUser;

        return $this;
    }

    /**
     * Get True, if the user has returned to the group themselves.
     */
    public function getIsReturned(): bool
    {
        return $this->isReturned;
    }

    /**
     * Set True, if the user has returned to the group themselves.
     */
    public function setIsReturned(bool $isReturned): self
    {
        $this->isReturned = $isReturned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentChatAddMembers',
            'member_name' => $this->getMemberName(),
            'is_current_user' => $this->getIsCurrentUser(),
            'is_returned' => $this->getIsReturned(),
        ];
    }
}
