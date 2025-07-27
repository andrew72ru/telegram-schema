<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The password was reset.
 */
class ResetPasswordResultOk extends ResetPasswordResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resetPasswordResultOk',
        ];
    }
}
