<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Resends the 2-step verification recovery email address verification code
 */
class ResendRecoveryEmailAddressCode extends PasswordState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resendRecoveryEmailAddressCode',
        ];
    }
}
