<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a photo published as a story.
 */
class FileTypePhotoStory extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypePhotoStory',
        ];
    }
}
