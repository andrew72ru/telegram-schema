<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Cancels verification of the 2-step verification recovery email address.
 */
class CancelRecoveryEmailAddressVerification extends PasswordState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'cancelRecoveryEmailAddressVerification',
        ];
    }
}
