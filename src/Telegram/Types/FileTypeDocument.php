<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a document.
 */
class FileTypeDocument extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeDocument',
        ];
    }
}
