<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The media is a photo @photo The photo
 */
class PaidMediaPhoto extends PaidMedia implements \JsonSerializable
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
            '@type' => 'paidMediaPhoto',
            'photo' => $this->getPhoto(),
        ];
    }
}
