<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns information about currently used log stream for internal logging of TDLib. Can be called synchronously.
 */
class GetLogStream extends LogStream implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLogStream',
        ];
    }
}
