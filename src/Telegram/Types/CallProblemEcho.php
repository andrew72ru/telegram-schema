<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user heard their own voice.
 */
class CallProblemEcho extends CallProblem implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callProblemEcho',
        ];
    }
}
