<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns default message auto-delete time setting for new chats.
 */
class GetDefaultMessageAutoDeleteTime extends MessageAutoDeleteTime implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getDefaultMessageAutoDeleteTime',
        ];
    }
}
