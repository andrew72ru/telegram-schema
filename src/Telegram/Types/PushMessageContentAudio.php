<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An audio message @audio Message content; may be null @is_pinned True, if the message is a pinned message with the specified content
 */
class PushMessageContentAudio extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('audio')]
        private Audio|null $audio = null,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    public function getAudio(): Audio|null
    {
        return $this->audio;
    }

    public function setAudio(Audio|null $audio): self
    {
        $this->audio = $audio;

        return $this;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentAudio',
            'audio' => $this->getAudio(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
