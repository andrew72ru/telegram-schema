<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * An HTTP URL.
 */
class TextEntityTypeUrl extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeUrl',
        ];
    }
}
