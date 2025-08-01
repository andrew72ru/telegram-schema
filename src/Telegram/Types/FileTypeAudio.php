<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is an audio file.
 */
class FileTypeAudio extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeAudio',
        ];
    }
}
