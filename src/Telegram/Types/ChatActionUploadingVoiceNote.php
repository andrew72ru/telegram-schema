<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is uploading a voice note @progress Upload progress, as a percentage.
 */
class ChatActionUploadingVoiceNote extends ChatAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('progress')]
        private int $progress,
    ) {
    }

    public function getProgress(): int
    {
        return $this->progress;
    }

    public function setProgress(int $progress): self
    {
        $this->progress = $progress;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionUploadingVoiceNote',
            'progress' => $this->getProgress(),
        ];
    }
}
