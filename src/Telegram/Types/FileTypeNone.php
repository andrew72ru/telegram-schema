<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The data is not a file.
 */
class FileTypeNone extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeNone',
        ];
    }
}
