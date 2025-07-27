<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat member was deleted.
 */
class PushMessageContentChatDeleteMember extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Name of the deleted member */
        #[SerializedName('member_name')]
        private string $memberName,
        /** True, if the current user was deleted from the group */
        #[SerializedName('is_current_user')]
        private bool $isCurrentUser,
        /** True, if the user has left the group themselves */
        #[SerializedName('is_left')]
        private bool $isLeft,
    ) {
    }

    /**
     * Get Name of the deleted member.
     */
    public function getMemberName(): string
    {
        return $this->memberName;
    }

    /**
     * Set Name of the deleted member.
     */
    public function setMemberName(string $memberName): self
    {
        $this->memberName = $memberName;

        return $this;
    }

    /**
     * Get True, if the current user was deleted from the group.
     */
    public function getIsCurrentUser(): bool
    {
        return $this->isCurrentUser;
    }

    /**
     * Set True, if the current user was deleted from the group.
     */
    public function setIsCurrentUser(bool $isCurrentUser): self
    {
        $this->isCurrentUser = $isCurrentUser;

        return $this;
    }

    /**
     * Get True, if the user has left the group themselves.
     */
    public function getIsLeft(): bool
    {
        return $this->isLeft;
    }

    /**
     * Set True, if the user has left the group themselves.
     */
    public function setIsLeft(bool $isLeft): self
    {
        $this->isLeft = $isLeft;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentChatDeleteMember',
            'member_name' => $this->getMemberName(),
            'is_current_user' => $this->getIsCurrentUser(),
            'is_left' => $this->getIsLeft(),
        ];
    }
}
