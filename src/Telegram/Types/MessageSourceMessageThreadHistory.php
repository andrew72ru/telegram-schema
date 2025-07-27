<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message is from history of a message thread.
 */
class MessageSourceMessageThreadHistory extends MessageSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSourceMessageThreadHistory',
        ];
    }
}
