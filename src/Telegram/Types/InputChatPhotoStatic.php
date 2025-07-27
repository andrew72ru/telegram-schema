<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A static photo in JPEG format @photo Photo to be set as profile photo. Only inputFileLocal and inputFileGenerated are allowed.
 */
class InputChatPhotoStatic extends InputChatPhoto implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('photo')]
        private InputFile|null $photo = null,
    ) {
    }

    public function getPhoto(): InputFile|null
    {
        return $this->photo;
    }

    public function setPhoto(InputFile|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputChatPhotoStatic',
            'photo' => $this->getPhoto(),
        ];
    }
}
