<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Requests to send a 2-step verification password recovery code to an email address that was previously set up. Works only when the current authorization state is authorizationStateWaitPassword.
 */
class RequestAuthenticationPasswordRecovery extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'requestAuthenticationPasswordRecovery',
        ];
    }
}
