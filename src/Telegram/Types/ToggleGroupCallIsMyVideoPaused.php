<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether current user's video is paused @group_call_id Group call identifier @is_my_video_paused Pass true if the current user's video is paused.
 */
class ToggleGroupCallIsMyVideoPaused extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        #[SerializedName('is_my_video_paused')]
        private bool $isMyVideoPaused,
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

    public function getIsMyVideoPaused(): bool
    {
        return $this->isMyVideoPaused;
    }

    public function setIsMyVideoPaused(bool $isMyVideoPaused): self
    {
        $this->isMyVideoPaused = $isMyVideoPaused;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleGroupCallIsMyVideoPaused',
            'group_call_id' => $this->getGroupCallId(),
            'is_my_video_paused' => $this->getIsMyVideoPaused(),
        ];
    }
}
