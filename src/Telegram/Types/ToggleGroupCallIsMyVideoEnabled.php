<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether current user's video is enabled @group_call_id Group call identifier @is_my_video_enabled Pass true if the current user's video is enabled.
 */
class ToggleGroupCallIsMyVideoEnabled extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        #[SerializedName('is_my_video_enabled')]
        private bool $isMyVideoEnabled,
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

    public function getIsMyVideoEnabled(): bool
    {
        return $this->isMyVideoEnabled;
    }

    public function setIsMyVideoEnabled(bool $isMyVideoEnabled): self
    {
        $this->isMyVideoEnabled = $isMyVideoEnabled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleGroupCallIsMyVideoEnabled',
            'group_call_id' => $this->getGroupCallId(),
            'is_my_video_enabled' => $this->getIsMyVideoEnabled(),
        ];
    }
}
