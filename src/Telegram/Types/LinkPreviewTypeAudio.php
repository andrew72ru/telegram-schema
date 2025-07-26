<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to an audio @audio The audio description
 */
class LinkPreviewTypeAudio extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('audio')]
        private Audio|null $audio = null,
    ) {
    }

    public function getAudio(): Audio|null
    {
        return $this->audio;
    }

    public function setAudio(Audio|null $audio): self
    {
        $this->audio = $audio;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeAudio',
            'audio' => $this->getAudio(),
        ];
    }
}
