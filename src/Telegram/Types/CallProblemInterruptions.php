<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The other side kept disappearing.
 */
class CallProblemInterruptions extends CallProblem implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callProblemInterruptions',
        ];
    }
}
