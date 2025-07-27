<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message is too old to get read date.
 */
class MessageReadDateTooOld extends MessageReadDate implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageReadDateTooOld',
        ];
    }
}
