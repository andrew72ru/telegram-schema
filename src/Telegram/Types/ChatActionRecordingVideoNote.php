<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user is recording a video note.
 */
class ChatActionRecordingVideoNote extends ChatAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionRecordingVideoNote',
        ];
    }
}
