<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The call was ended before the conversation started. It was declined by the other party.
 */
class CallDiscardReasonDeclined extends CallDiscardReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callDiscardReasonDeclined',
        ];
    }
}
