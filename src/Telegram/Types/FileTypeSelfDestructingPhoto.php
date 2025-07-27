<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a self-destructing photo in a private chat.
 */
class FileTypeSelfDestructingPhoto extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeSelfDestructingPhoto',
        ];
    }
}
