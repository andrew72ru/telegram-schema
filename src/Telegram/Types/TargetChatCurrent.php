<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The currently opened chat and forum topic must be kept.
 */
class TargetChatCurrent extends TargetChat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'targetChatCurrent',
        ];
    }
}
