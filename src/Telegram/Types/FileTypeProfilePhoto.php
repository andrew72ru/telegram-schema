<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a profile photo.
 */
class FileTypeProfilePhoto extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeProfilePhoto',
        ];
    }
}
