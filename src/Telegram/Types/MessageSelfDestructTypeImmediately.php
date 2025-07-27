<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message can be opened only once and will be self-destructed once closed.
 */
class MessageSelfDestructTypeImmediately extends MessageSelfDestructType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSelfDestructTypeImmediately',
        ];
    }
}
