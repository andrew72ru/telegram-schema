<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The data channel for screen sharing.
 */
class GroupCallDataChannelScreenSharing extends GroupCallDataChannel implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallDataChannelScreenSharing',
        ];
    }
}
