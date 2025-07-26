<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The other side couldn't hear the user
 */
class CallProblemSilentRemote extends CallProblem implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callProblemSilentRemote',
        ];
    }
}
