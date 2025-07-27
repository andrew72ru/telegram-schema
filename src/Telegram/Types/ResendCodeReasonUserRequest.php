<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user requested to resend the code.
 */
class ResendCodeReasonUserRequest extends ResendCodeReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resendCodeReasonUserRequest',
        ];
    }
}
