<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The call wasn't discarded, or the reason is unknown
 */
class CallDiscardReasonEmpty extends CallDiscardReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callDiscardReasonEmpty',
        ];
    }
}
