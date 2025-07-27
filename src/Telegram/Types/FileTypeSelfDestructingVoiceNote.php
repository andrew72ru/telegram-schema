<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a self-destructing voice note in a private chat.
 */
class FileTypeSelfDestructingVoiceNote extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeSelfDestructingVoiceNote',
        ];
    }
}
