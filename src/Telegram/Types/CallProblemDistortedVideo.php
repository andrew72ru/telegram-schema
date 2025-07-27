<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The video was distorted.
 */
class CallProblemDistortedVideo extends CallProblem implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callProblemDistortedVideo',
        ];
    }
}
