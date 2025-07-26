<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Ends recording of an active group call; for video chats only. Requires groupCall.can_be_managed right @group_call_id Group call identifier
 */
class EndGroupCallRecording extends Ok implements \JsonSerializable
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
            '@type' => 'endGroupCallRecording',
            'group_call_id' => $this->getGroupCallId(),
        ];
    }
}
