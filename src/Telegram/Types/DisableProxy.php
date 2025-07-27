<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Disables the currently enabled proxy. Can be called before authorization.
 */
class DisableProxy extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'disableProxy',
        ];
    }
}
