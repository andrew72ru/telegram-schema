<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The call is hanging up after discardCall has been called.
 */
class CallStateHangingUp extends CallState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callStateHangingUp',
        ];
    }
}
