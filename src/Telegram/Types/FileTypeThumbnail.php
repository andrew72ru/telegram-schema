<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a thumbnail of another file.
 */
class FileTypeThumbnail extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeThumbnail',
        ];
    }
}
