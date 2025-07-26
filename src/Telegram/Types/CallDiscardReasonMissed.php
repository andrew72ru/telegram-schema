<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The call was ended before the conversation started. It was canceled by the caller or missed by the other party
 */
class CallDiscardReasonMissed extends CallDiscardReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callDiscardReasonMissed',
        ];
    }
}
