<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The call has been answered and encryption keys are being exchanged.
 */
class CallStateExchangingKeys extends CallState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callStateExchangingKeys',
        ];
    }
}
