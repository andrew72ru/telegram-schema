<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Ends screen sharing in a joined group call @group_call_id Group call identifier.
 */
class EndGroupCallScreenSharing extends Ok implements \JsonSerializable
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
            '@type' => 'endGroupCallScreenSharing',
            'group_call_id' => $this->getGroupCallId(),
        ];
    }
}
