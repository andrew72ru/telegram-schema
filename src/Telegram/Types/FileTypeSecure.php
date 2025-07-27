<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a file from Secure storage used for storing Telegram Passport files.
 */
class FileTypeSecure extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeSecure',
        ];
    }
}
