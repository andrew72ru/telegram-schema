<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a self-destructing video note in a private chat.
 */
class FileTypeSelfDestructingVideoNote extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeSelfDestructingVideoNote',
        ];
    }
}
