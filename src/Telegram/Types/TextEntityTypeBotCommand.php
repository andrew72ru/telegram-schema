<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A bot command, beginning with "/".
 */
class TextEntityTypeBotCommand extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeBotCommand',
        ];
    }
}
