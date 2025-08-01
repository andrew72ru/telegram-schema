<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the current state of 2-step verification.
 */
class GetPasswordState extends PasswordState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPasswordState',
        ];
    }
}
