<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a web site @photo Article's main photo; may be null
 */
class LinkPreviewTypeArticle extends LinkPreviewType implements \JsonSerializable
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
            '@type' => 'linkPreviewTypeArticle',
            'photo' => $this->getPhoto(),
        ];
    }
}
