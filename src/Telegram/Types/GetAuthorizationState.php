<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the current authorization state. This is an offline method. For informational purposes only. Use updateAuthorizationState instead to maintain the current authorization state. Can be called before initialization.
 */
class GetAuthorizationState extends AuthorizationState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getAuthorizationState',
        ];
    }
}
