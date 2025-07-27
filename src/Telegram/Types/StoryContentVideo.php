<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video story @video The video in MPEG4 format @alternative_video Alternative version of the video in MPEG4 format, encoded with H.264 codec; may be null.
 */
class StoryContentVideo extends StoryContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('video')]
        private StoryVideo|null $video = null,
        #[SerializedName('alternative_video')]
        private StoryVideo|null $alternativeVideo = null,
    ) {
    }

    public function getVideo(): StoryVideo|null
    {
        return $this->video;
    }

    public function setVideo(StoryVideo|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getAlternativeVideo(): StoryVideo|null
    {
        return $this->alternativeVideo;
    }

    public function setAlternativeVideo(StoryVideo|null $alternativeVideo): self
    {
        $this->alternativeVideo = $alternativeVideo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyContentVideo',
            'video' => $this->getVideo(),
            'alternative_video' => $this->getAlternativeVideo(),
        ];
    }
}
