<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Closes the TDLib instance after a proper logout. Requires an available network connection. All local data will be destroyed. After the logout completes, updateAuthorizationState with authorizationStateClosed will be sent.
 */
class LogOut extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'logOut',
        ];
    }
}
