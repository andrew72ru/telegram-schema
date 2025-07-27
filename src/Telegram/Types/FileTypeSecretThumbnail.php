<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a thumbnail of a file from a secret chat.
 */
class FileTypeSecretThumbnail extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeSecretThumbnail',
        ];
    }
}
