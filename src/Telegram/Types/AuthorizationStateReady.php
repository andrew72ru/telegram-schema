<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user has been successfully authorized. TDLib is now ready to answer general requests.
 */
class AuthorizationStateReady extends AuthorizationState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateReady',
        ];
    }
}
