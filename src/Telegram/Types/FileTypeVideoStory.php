<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The file is a video published as a story
 */
class FileTypeVideoStory extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeVideoStory',
        ];
    }
}
