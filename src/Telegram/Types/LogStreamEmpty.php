<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The log is written nowhere.
 */
class LogStreamEmpty extends LogStream implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'logStreamEmpty',
        ];
    }
}
