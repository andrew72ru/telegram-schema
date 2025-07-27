<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a media album consisting of photos and videos @media The list of album media @caption Album caption.
 */
class LinkPreviewTypeAlbum extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('media')]
        private array|null $media = null,
        #[SerializedName('caption')]
        private string $caption,
    ) {
    }

    public function getMedia(): array|null
    {
        return $this->media;
    }

    public function setMedia(array|null $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function setCaption(string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeAlbum',
            'media' => $this->getMedia(),
            'caption' => $this->getCaption(),
        ];
    }
}
