<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user heard background noise.
 */
class CallProblemNoise extends CallProblem implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callProblemNoise',
        ];
    }
}
