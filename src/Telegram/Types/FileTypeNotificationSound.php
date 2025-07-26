<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The file is a notification sound
 */
class FileTypeNotificationSound extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeNotificationSound',
        ];
    }
}
