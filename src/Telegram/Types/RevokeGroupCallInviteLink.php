<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Revokes invite link for a group call. Requires groupCall.can_be_managed right for video chats or groupCall.is_owned otherwise @group_call_id Group call identifier.
 */
class RevokeGroupCallInviteLink extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('group_call_id')]
        private int $groupCallId,
    ) {
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'revokeGroupCallInviteLink',
            'group_call_id' => $this->getGroupCallId(),
        ];
    }
}
