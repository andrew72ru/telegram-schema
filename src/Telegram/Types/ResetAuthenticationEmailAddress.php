<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Resets the login email address. May return an error with a message "TASK_ALREADY_EXISTS" if reset is still pending.
 */
class ResetAuthenticationEmailAddress extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resetAuthenticationEmailAddress',
        ];
    }
}
