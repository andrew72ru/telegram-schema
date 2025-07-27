<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The file is a self-destructing video in a private chat.
 */
class FileTypeSelfDestructingVideo extends FileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileTypeSelfDestructingVideo',
        ];
    }
}
