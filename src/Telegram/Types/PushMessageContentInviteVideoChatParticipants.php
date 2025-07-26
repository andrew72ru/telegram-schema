<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An invitation of participants to a video chat or live stream
 */
class PushMessageContentInviteVideoChatParticipants extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** True, if the current user was invited to the video chat or the live stream */
        #[SerializedName('is_current_user')]
        private bool $isCurrentUser,
    ) {
    }

    /**
     * Get True, if the current user was invited to the video chat or the live stream
     */
    public function getIsCurrentUser(): bool
    {
        return $this->isCurrentUser;
    }

    /**
     * Set True, if the current user was invited to the video chat or the live stream
     */
    public function setIsCurrentUser(bool $isCurrentUser): self
    {
        $this->isCurrentUser = $isCurrentUser;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentInviteVideoChatParticipants',
            'is_current_user' => $this->getIsCurrentUser(),
        ];
    }
}
