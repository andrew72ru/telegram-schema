<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The call is hanging up after discardCall has been called
 */
class CallStateHangingUp extends CallState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callStateHangingUp',
        ];
    }
}
