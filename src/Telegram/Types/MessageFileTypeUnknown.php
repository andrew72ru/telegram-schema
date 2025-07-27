<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The messages were exported from a chat of unknown type.
 */
class MessageFileTypeUnknown extends MessageFileType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageFileTypeUnknown',
        ];
    }
}
