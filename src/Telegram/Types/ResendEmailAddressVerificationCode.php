<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Resends the code to verify an email address to be added to a user's Telegram Passport
 */
class ResendEmailAddressVerificationCode extends EmailAddressAuthenticationCodeInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resendEmailAddressVerificationCode',
        ];
    }
}
