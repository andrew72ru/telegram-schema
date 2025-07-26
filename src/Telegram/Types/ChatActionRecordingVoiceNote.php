<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is recording a voice note
 */
class ChatActionRecordingVoiceNote extends ChatAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionRecordingVoiceNote',
        ];
    }
}
