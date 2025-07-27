<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file was sent to a secret chat (the file type is not known to the server).
 */
class FileTypeSecret extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeSecret',
        ];
    }
}
