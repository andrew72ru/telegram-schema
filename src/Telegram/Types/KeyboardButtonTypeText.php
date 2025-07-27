<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A simple button, with text that must be sent when the button is pressed.
 */
class KeyboardButtonTypeText extends KeyboardButtonType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'keyboardButtonTypeText',
        ];
    }
}
