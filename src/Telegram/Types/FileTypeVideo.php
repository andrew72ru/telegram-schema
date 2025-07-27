<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a video.
 */
class FileTypeVideo extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeVideo',
        ];
    }
}
