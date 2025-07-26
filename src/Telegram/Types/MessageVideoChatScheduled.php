<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new video chat was scheduled @group_call_id Identifier of the video chat. The video chat can be received through the method getGroupCall @start_date Point in time (Unix timestamp) when the group call is expected to be started by an administrator
 */
class MessageVideoChatScheduled extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        #[SerializedName('start_date')]
        private int $startDate,
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

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageVideoChatScheduled',
            'group_call_id' => $this->getGroupCallId(),
            'start_date' => $this->getStartDate(),
        ];
    }
}
