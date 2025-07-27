<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Terminates all other sessions of the current user.
 */
class TerminateAllOtherSessions extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'terminateAllOtherSessions',
        ];
    }
}
