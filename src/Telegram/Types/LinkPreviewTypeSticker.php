<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a sticker @sticker The sticker. It can be an arbitrary WEBP image and can have dimensions bigger than 512.
 */
class LinkPreviewTypeSticker extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
    ) {
    }

    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeSticker',
            'sticker' => $this->getSticker(),
        ];
    }
}
