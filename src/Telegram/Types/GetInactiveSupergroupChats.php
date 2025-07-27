<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns a list of recently inactive supergroups and channels. Can be used when user reaches limit on the number of joined supergroups and channels and receives the error "CHANNELS_TOO_MUCH". Also, the limit can be increased with Telegram Premium.
 */
class GetInactiveSupergroupChats extends Chats implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getInactiveSupergroupChats',
        ];
    }
}
