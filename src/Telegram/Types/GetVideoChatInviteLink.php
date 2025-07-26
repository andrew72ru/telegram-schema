<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns invite link to a video chat in a public chat
 */
class GetVideoChatInviteLink extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Pass true if the invite link needs to contain an invite hash, passing which to joinVideoChat would allow the invited user to unmute themselves. Requires groupCall.can_be_managed right */
        #[SerializedName('can_self_unmute')]
        private bool $canSelfUnmute,
    ) {
    }

    /**
     * Get Group call identifier
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Group call identifier
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get Pass true if the invite link needs to contain an invite hash, passing which to joinVideoChat would allow the invited user to unmute themselves. Requires groupCall.can_be_managed right
     */
    public function getCanSelfUnmute(): bool
    {
        return $this->canSelfUnmute;
    }

    /**
     * Set Pass true if the invite link needs to contain an invite hash, passing which to joinVideoChat would allow the invited user to unmute themselves. Requires groupCall.can_be_managed right
     */
    public function setCanSelfUnmute(bool $canSelfUnmute): self
    {
        $this->canSelfUnmute = $canSelfUnmute;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getVideoChatInviteLink',
            'group_call_id' => $this->getGroupCallId(),
            'can_self_unmute' => $this->getCanSelfUnmute(),
        ];
    }
}
