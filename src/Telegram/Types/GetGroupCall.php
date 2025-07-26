<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a group call @group_call_id Group call identifier
 */
class GetGroupCall extends GroupCall implements \JsonSerializable
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
            '@type' => 'getGroupCall',
            'group_call_id' => $this->getGroupCallId(),
        ];
    }
}
