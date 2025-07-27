<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user couldn't hear the other side.
 */
class CallProblemSilentLocal extends CallProblem implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callProblemSilentLocal',
        ];
    }
}
