<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A button with a game that sends a callback query to a bot. This button must be in the first column and row of the keyboard and can be attached only to a message with content of the type messageGame.
 */
class InlineKeyboardButtonTypeCallbackGame extends InlineKeyboardButtonType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineKeyboardButtonTypeCallbackGame',
        ];
    }
}
