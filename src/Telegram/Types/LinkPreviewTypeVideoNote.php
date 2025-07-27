<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a video note message @video_note The video note.
 */
class LinkPreviewTypeVideoNote extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('video_note')]
        private VideoNote|null $videoNote = null,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeVideoNote',
            'video_note' => $this->getVideoNote(),
        ];
    }
}
