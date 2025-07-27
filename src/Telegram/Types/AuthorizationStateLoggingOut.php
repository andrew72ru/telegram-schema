<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user is currently logging out.
 */
class AuthorizationStateLoggingOut extends AuthorizationState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateLoggingOut',
        ];
    }
}
