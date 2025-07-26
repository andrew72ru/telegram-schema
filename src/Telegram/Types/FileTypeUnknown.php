<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The file type is not yet known
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
