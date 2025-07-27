<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A photo story @photo The photo.
 */
class StoryContentPhoto extends StoryContent implements \JsonSerializable
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
            '@type' => 'storyContentPhoto',
            'photo' => $this->getPhoto(),
        ];
    }
}
