<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An audio message @audio The audio description @caption Audio caption.
 */
class MessageAudio extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('audio')]
        private Audio|null $audio = null,
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
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

    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageAudio',
            'audio' => $this->getAudio(),
            'caption' => $this->getCaption(),
        ];
    }
}
