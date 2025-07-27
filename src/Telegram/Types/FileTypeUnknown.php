<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file type is not yet known.
 */
class FileTypeUnknown extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeUnknown',
        ];
    }
}
