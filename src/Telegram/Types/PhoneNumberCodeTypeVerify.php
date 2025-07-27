<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Verifies ownership of a phone number to be added to the user's Telegram Passport.
 */
class PhoneNumberCodeTypeVerify extends PhoneNumberCodeType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'phoneNumberCodeTypeVerify',
        ];
    }
}
