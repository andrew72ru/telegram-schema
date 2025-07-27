<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a wallpaper or a background pattern.
 */
class FileTypeWallpaper extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeWallpaper',
        ];
    }
}
