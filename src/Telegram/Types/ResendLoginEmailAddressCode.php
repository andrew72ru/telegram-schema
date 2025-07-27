<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Resends the login email address verification code.
 */
class ResendLoginEmailAddressCode extends EmailAddressAuthenticationCodeInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resendLoginEmailAddressCode',
        ];
    }
}
