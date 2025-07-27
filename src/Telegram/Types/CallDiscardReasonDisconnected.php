<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The call was ended during the conversation because the users were disconnected.
 */
class CallDiscardReasonDisconnected extends CallDiscardReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callDiscardReasonDisconnected',
        ];
    }
}
