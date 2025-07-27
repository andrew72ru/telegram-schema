<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns current verbosity level of the internal logging of TDLib. Can be called synchronously.
 */
class GetLogVerbosityLevel extends LogVerbosityLevel implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLogVerbosityLevel',
        ];
    }
}
