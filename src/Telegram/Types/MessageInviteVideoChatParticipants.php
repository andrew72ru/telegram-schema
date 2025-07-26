<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with information about an invitation to a video chat @group_call_id Identifier of the video chat. The video chat can be received through the method getGroupCall @user_ids Invited user identifiers
 */
class MessageInviteVideoChatParticipants extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
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

    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageInviteVideoChatParticipants',
            'group_call_id' => $this->getGroupCallId(),
            'user_ids' => $this->getUserIds(),
        ];
    }
}
