<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Initialization parameters are needed. Call setTdlibParameters to provide them.
 */
class AuthorizationStateWaitTdlibParameters extends AuthorizationState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateWaitTdlibParameters',
        ];
    }
}
