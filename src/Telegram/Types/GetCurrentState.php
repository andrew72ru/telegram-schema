<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns all updates needed to restore current TDLib state, i.e. all actual updateAuthorizationState/updateUser/updateNewChat and others. This is especially useful if TDLib is run in a separate process. Can be called before initialization.
 */
class GetCurrentState extends Updates implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCurrentState',
        ];
    }
}
