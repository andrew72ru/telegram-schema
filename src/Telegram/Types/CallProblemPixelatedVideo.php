<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The video was pixelated
 */
class CallProblemPixelatedVideo extends CallProblem implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callProblemPixelatedVideo',
        ];
    }
}
