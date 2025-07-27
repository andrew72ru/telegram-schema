<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Cancels reset of 2-step verification password. The method can be called if passwordState.pending_reset_date > 0.
 */
class CancelPasswordReset extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'cancelPasswordReset',
        ];
    }
}
