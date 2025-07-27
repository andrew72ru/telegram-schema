<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The media is a photo @photo Photo description.
 */
class LinkPreviewAlbumMediaPhoto extends LinkPreviewAlbumMedia implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('photo')]
        private Photo|null $photo = null,
    ) {
    }

    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewAlbumMediaPhoto',
            'photo' => $this->getPhoto(),
        ];
    }
}
