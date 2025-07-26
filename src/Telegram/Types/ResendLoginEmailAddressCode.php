<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Resends the login email address verification code
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
