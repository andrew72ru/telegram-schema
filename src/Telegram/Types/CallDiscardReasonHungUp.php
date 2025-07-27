<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The call was ended because one of the parties hung up.
 */
class CallDiscardReasonHungUp extends CallDiscardReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callDiscardReasonHungUp',
        ];
    }
}
