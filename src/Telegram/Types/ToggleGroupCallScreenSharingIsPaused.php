<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Pauses or unpauses screen sharing in a joined group call @group_call_id Group call identifier @is_paused Pass true to pause screen sharing; pass false to unpause it.
 */
class ToggleGroupCallScreenSharingIsPaused extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        #[SerializedName('is_paused')]
        private bool $isPaused,
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

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    public function setIsPaused(bool $isPaused): self
    {
        $this->isPaused = $isPaused;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleGroupCallScreenSharingIsPaused',
            'group_call_id' => $this->getGroupCallId(),
            'is_paused' => $this->getIsPaused(),
        ];
    }
}
