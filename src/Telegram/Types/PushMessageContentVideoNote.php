<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video note message @video_note Message content; may be null @is_pinned True, if the message is a pinned message with the specified content
 */
class PushMessageContentVideoNote extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('video_note')]
        private VideoNote|null $videoNote = null,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    public function getVideoNote(): VideoNote|null
    {
        return $this->videoNote;
    }

    public function setVideoNote(VideoNote|null $videoNote): self
    {
        $this->videoNote = $videoNote;

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
            '@type' => 'pushMessageContentVideoNote',
            'video_note' => $this->getVideoNote(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
