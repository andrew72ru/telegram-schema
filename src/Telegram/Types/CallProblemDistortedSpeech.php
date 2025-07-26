<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The speech was distorted
 */
class CallProblemDistortedSpeech extends CallProblem implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callProblemDistortedSpeech',
        ];
    }
}
