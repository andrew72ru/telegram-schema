<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is the owner of the chat and has all the administrator privileges
 */
class ChatMemberStatusCreator extends ChatMemberStatus implements \JsonSerializable
{
    public function __construct(
        /** A custom title of the owner; 0-16 characters without emoji; applicable to supergroups only */
        #[SerializedName('custom_title')]
        private string $customTitle,
        /** True, if the creator isn't shown in the chat member list and sends messages anonymously; applicable to supergroups only */
        #[SerializedName('is_anonymous')]
        private bool $isAnonymous,
        /** True, if the user is a member of the chat */
        #[SerializedName('is_member')]
        private bool $isMember,
    ) {
    }

    /**
     * Get A custom title of the owner; 0-16 characters without emoji; applicable to supergroups only
     */
    public function getCustomTitle(): string
    {
        return $this->customTitle;
    }

    /**
     * Set A custom title of the owner; 0-16 characters without emoji; applicable to supergroups only
     */
    public function setCustomTitle(string $customTitle): self
    {
        $this->customTitle = $customTitle;

        return $this;
    }

    /**
     * Get True, if the creator isn't shown in the chat member list and sends messages anonymously; applicable to supergroups only
     */
    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * Set True, if the creator isn't shown in the chat member list and sends messages anonymously; applicable to supergroups only
     */
    public function setIsAnonymous(bool $isAnonymous): self
    {
        $this->isAnonymous = $isAnonymous;

        return $this;
    }

    /**
     * Get True, if the user is a member of the chat
     */
    public function getIsMember(): bool
    {
        return $this->isMember;
    }

    /**
     * Set True, if the user is a member of the chat
     */
    public function setIsMember(bool $isMember): self
    {
        $this->isMember = $isMember;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMemberStatusCreator',
            'custom_title' => $this->getCustomTitle(),
            'is_anonymous' => $this->getIsAnonymous(),
            'is_member' => $this->getIsMember(),
        ];
    }
}
