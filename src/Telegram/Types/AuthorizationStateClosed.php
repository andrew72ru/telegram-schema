<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * TDLib client is in its final state. All databases are closed and all resources are released. No other updates will be received after this. All queries will be responded to.
 */
class AuthorizationStateClosed extends AuthorizationState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateClosed',
        ];
    }
}
