<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The media is a video @video Video description.
 */
class LinkPreviewAlbumMediaVideo extends LinkPreviewAlbumMedia implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('video')]
        private Video|null $video = null,
    ) {
    }

    public function getVideo(): Video|null
    {
        return $this->video;
    }

    public function setVideo(Video|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewAlbumMediaVideo',
            'video' => $this->getVideo(),
        ];
    }
}
